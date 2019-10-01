<?php

namespace App\Http\Controllers\Users\Views;

use App\FlCountry;
use App\FlUsersRole;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $session = Auth::user();
        $User = User::where('id',$session->id)->first();
        $FlUsersRole = FlUsersRole::all();
        return view('users.account.index')
            ->with('session',$session)
            ->with('userRoles',$FlUsersRole)
            ->with('admin',$User);
    }

    //UPDATE AVATAR
    public function avatar(Request $request)
    {
        $session = Auth::user();
        try {
            $User = User::findOrFail($session->id);
            $alias = strtolower(preg_replace('/\s+/', '-', $User->user));
            $avatar = $request->avatar;
            if ($request->hasFile('avatar')) {
                Storage::delete("users/$session->id/avatar/$User->avatar");
                //Get Filename With The Extension
                $filenameWithExt = $avatar->getClientOriginalName();
                //Get Just Filename
                $fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //Get Just Extension
                $fileExtension = $avatar->getClientOriginalExtension();
                //Filename To Store
                $fileNameToStore = 'IMG'.'-'.time().'.'.$fileExtension;
                //Upload Image
                $path = $avatar->storeAs("users/$session->id/avatar/",$fileNameToStore);
                $User->update(['avatar' => $fileNameToStore]);
            }
            else { return redirect("users/account")->with("error", "No image detected!"); }
            return redirect("users/account")->with("success", "Avatar was updated successfully");
        } catch (\Exception $e) { return redirect()->back()->with("warning", "Avatar not updated. Please try again!"); }
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
            $session = Auth::user();
            $User = User::where('id',$session->id)->first();
            $name  = ucwords($request->name);
            $request->merge(['name' => $name]);
            // dd($name);
            $User->update($request->all());
            return redirect()->back()->with("success", "Account updated successfully.");
        } catch (\Exception $e) { return redirect()->back()->with("warning", "There was a problem updating your account. Please try again!"); }
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
