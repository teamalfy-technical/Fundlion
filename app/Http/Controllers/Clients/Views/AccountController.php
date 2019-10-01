<?php

namespace App\Http\Controllers\Clients\Views;

use App\Client;
use App\FlClientsFiles;
use App\FlClientsFilesType;
use App\FlCompanyDetail;
use App\FlCountry;
use App\FlIndustries;
use App\FlRevenue;
use App\FlRole;
use App\FlBusinessStructure;
use App\FlTradingFor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:client');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $session = Auth::user('client');
        $client = Client::where('id',$session->id)->first();
        $FlCountry = FlCountry::all();
        $FlIndustries = FlIndustries::all();
        $FlTradingAs = FlBusinessStructure::all();
        $FlTradingFor = FlTradingFor::all();
        $FlRevenue = FlRevenue::all();
        $FlRole = FlRole::all();
        $FlClientsFilesType = FlClientsFilesType::all();
        $FlClientsFilesFirst = FlClientsFiles::where('client_id',$session->id)->first();
        $FlClientsFiles = FlClientsFiles::where('client_id',$session->id)->get();
        return view('clients.account.index')
            ->with('all_countries', $FlCountry)
            ->with('all_industries', $FlIndustries)
            ->with('all_trading_as', $FlTradingAs)
            ->with('all_trading_for', $FlTradingFor)
            ->with('all_revenues', $FlRevenue)
            ->with('all_roles', $FlRole)
            ->with('allTypes', $FlClientsFilesType)
            ->with('clientFiles', $FlClientsFiles)
            ->with('clientFilesFirst', $FlClientsFilesFirst)
            ->with('session',$session)
            ->with('client',$client);
    }

	public function all_read(Request $request, $id)
	{
		dd($id);
		$client = Client::findOrFail($id);
		$client->unreadNotifications()->update(['read_at' => now()]);

//			redirect()->back();
	}

	public function read(Request $request, $id)
	{
		dd($id);
		$client = Client::findOrFail($id);
		$client->unreadNotifications()->update(['read_at' => now()]);

//			redirect()->back();
	}

    //UPDATE AVATAR
    public function avatar(Request $request)
    {
        $session = Auth::user('client');
        try {
            $Client = Client::findOrFail($session->id);
            $alias = strtolower(preg_replace('/\s+/', '-', $Client->user));
            $avatar = $request->avatar;
            if ($request->hasFile('avatar')) {
                Storage::delete("clients/$session->id/avatar/$Client->avatar");
                //Get Filename With The Extension
                $filenameWithExt = $avatar->getClientOriginalName();
                //Get Just Filename
                $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //Get Just Extension
                $fileExtension = $avatar->getClientOriginalExtension();
                //Filename To Store
                $fileNameToStore = 'IMG'.'-'.time().'.'.$fileExtension;
                //Upload Image
                $path = $avatar->storeAs("clients/$session->id/avatar/",$fileNameToStore);
                $Client->update(['avatar' => $fileNameToStore]);
            }
            else { return redirect("clients/account")->with("error", "No image detected!"); }
            return redirect("clients/account")->with("success", "Avatar was updated successfully");
        } catch (\Exception $e) { return redirect()->back()->with("warning", "Avatar not updated. Please try again!"); }
    }

    //UPDATE LOGO
    public function logo(Request $request)
    {
        $session = Auth::user('client');
        try {
            $FlCompanyDetail = FlCompanyDetail::findOrFail($session->id);
            $logo = $request->logo;
            if ($request->hasFile('logo')) {
                Storage::delete("clients/$session->id/logo/$FlCompanyDetail->logo");
                //Get Filename With The Extension
                $filenameWithExt = $logo->getClientOriginalName();
                //Get Just Filename
                $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //Get Just Extension
                $fileExtension = $logo->getClientOriginalExtension();
                //Filename To Store
                $fileNameToStore = 'IMG'.'-'.time().'.'.$fileExtension;
                //Upload Image
                $path = $logo->storeAs("clients/$session->id/logo/",$fileNameToStore);
                $FlCompanyDetail->update(['logo' => $fileNameToStore]);
            }
            else { return redirect("clients/account")->with("error", "No image detected!"); }
            return redirect("clients/account")->with("success", "Logo was updated successfully");
        } catch (\Exception $e) { return redirect()->back()->with("warning", "Logo not updated. Please try again!"); }
    }

    //UPDATE AVATAR
    public function doc_upload(Request $request)
    {
    	$session = Auth::user('client');
			$client = Client::where('id', $session->id)->first();
			$type_id = $request->type_id;
			$type_custom = $request->type_custom;

			 try {
				if ($request->hasFile('file')) {

					if ($type_id !== null && $type_id < 6 && $type_custom === null) {
						$type = FlClientsFilesType::where('id', $type_id)->first();
						$doc_type = $type->type;
					} elseif ($type_id === null && $type_custom !== null || $type_id === 6 && $type_custom === null) {
						return redirect()->back()->with("error", "Please specify document type");
					} else {
						$doc_type = $type_custom;
					}

					$request->merge(['client_id' => $client->id]);
					$FlClientsFiles = FlClientsFiles::where('client_id',  $client->id)->where('type_id', $type_id)->where('type_id', '!=', 5)->first();
					$alias = strtolower(preg_replace('/\s+/', '_', $doc_type));

					$file = $request->file;
					$fileArray = array('image' => $file);
					$rules = array('image' => 'mimes:jpeg,jpg,png,gif,pdf,docx,ppt,txt,doc|required|max:10000'); // max 10000kb);
					$validator = Validator::make($fileArray, $rules);

					if ($validator->fails()) {
						// Redirect or return json to frontend with a helpful message to inform the user
						// that the provided file was not an adequate type
						return redirect()->back()->with("error", "File type not supported. Please upload only document file!");
					} else {
						if ($FlClientsFiles !== null) {
							Storage::delete("clients/ $client->id/documents/$FlClientsFiles->file");
						}
						$filenameWithExt = $file->getClientOriginalName();
						//Get Just Filename
						$fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
						//Get Just Extension
						$fileExtension = $file->getClientOriginalExtension();
						//Filename To Store
						$fileNameToStore = $alias . "." . $fileExtension;
						//Upload Image
						$path = $file->storeAs("clients/ $client->id/documents", $fileNameToStore);
						if ($FlClientsFiles !== null) { $FlClientsFiles->update($request->all()); }
						else { $FlClientsFiles = FlClientsFiles::create($request->all()); }
						$FlClientsFiles->update(['file' => $fileNameToStore]);
					}
				}
					else { return redirect()->back()->with("error", "No file detected!"); }
					if($type_id === null) { return redirect(url("clients/account#doc-upload"))->with("error", "You did not select any file type!"); }
					return redirect(url("clients/account#doc-upload"))->with("success", "File was updated successfully");
			} catch (\Exception $e) { return redirect(url("clients/account#doc-upload"))->with("warning", "File not uploaded. Please try again!"); }
    }

    //UPDATE AVATAR
    public function doc_remove(Request $request)
    {
        $session = Auth::user('client');
        $file_id = $request->file_id;
        $FlClientsFiles = FlClientsFiles::findOrFail($file_id);
        try {
            Storage::delete("clients/$session->id/documents/$FlClientsFiles->file");
            $FlClientsFiles->delete();
            return redirect(url("clients/account#doc-upload"))->with("success", "File was removed successfully");
        } catch (\Exception $e) { return redirect()->back()->with("warning", "File not updated. Please try again!"); }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        try {
            $client_id = Auth::user('client')->id;
            $Client = Client::findOrFail($client_id);
            $Company = FlCompanyDetail::where('client_id',$client_id)->first();
            $full_name  = ucwords($request->name);
            $names = explode(" ", $full_name,2);
            $request->merge(['first_name' => $names[0]]);
            $request->merge(['last_name' => $names[1]]);
            $Client->update($request->all());
            $Company->update($request->all());
            return redirect()->back()->with("success", "User account updated successfully.");
        } catch (\Exception $e) { return redirect()->back()->with("warning", "There was a problem updating user account. Please try again!"); }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
