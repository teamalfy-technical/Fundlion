<?php

	namespace App\Http\Controllers\Users\Views;

	use App\Client;
	use App\FlClientsFiles;
	use App\FlClientsFilesType;
	use App\FlClientsLoan;
	use App\FlLoansStatus;
	use App\FlMessage;
	use App\Http\Controllers\Controller;
	use App\Lender;
	use App\Notifications\clientsNotifications;
	use App\User;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\Storage;
	use Illuminate\Support\Facades\Validator;

	class ClientsController extends Controller
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
			$session = Auth::user('client');
			$User = User::findOrFail($session->id);
			$Users = User::where('role_id', 2)->get();
			$Clientele = Client::where('account_manager',$User->id)->paginate(8);
			$Client = Client::paginate(8);
			$FlLoansStatus = FlLoansStatus::all();
			$Lender = Lender::all();
			$FlClientsFiles = FlClientsFiles::all();
			$FlClientsFilesType = FlClientsFilesType::all();
			$FlClientsLoan = FlClientsLoan::all();
			$FlMessage = FlMessage::where('manager_id', $session->id)->get();

			return view('users.clients.index')
				->with('session', $session)
				->with('clients', $Client)
				->with('clientele', $Clientele)
				->with('statuses', $FlLoansStatus)
				->with('lenders', $Lender)
				->with('managers', $Users)
				->with('allTypes', $FlClientsFilesType)
				->with('clientsFiles', $FlClientsFiles)
				->with('messages', $FlMessage)
				->with('loans', $FlClientsLoan)
				->with('admin', $User);
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
		 * @param \Illuminate\Http\Request $request
		 * @return \Illuminate\Http\Response
		 */
		public function store(Request $request)
		{
			//
		}

		/**
		 * Display the specified resource.
		 *
		 * @param int $id
		 * @return \Illuminate\Http\Response
		 */
		public function show($id)
		{
			//
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param int $id
		 * @return \Illuminate\Http\Response
		 */
		public function edit($id)
		{
			//
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param \Illuminate\Http\Request $request
		 * @param int $id
		 * @return \Illuminate\Http\Response
		 */
		public function update(Request $request, $id)
		{
			$type_id = $request->type_id;
			$type_custom = $request->type_custom;
			$client = Client::where('id', $id)->first();
			$loan_status = $request->loan_status_id;
			$account_manager = $request->account_manager;
			$file = $request->file;

			// try {
			if ($request->hasFile('file')) {

				if ($type_id !== null && $type_id < 6 && $type_custom === null) {
					$type = FlClientsFilesType::where('id', $type_id)->first();
					$doc_type = $type->type;
				} elseif ($type_id === null && $type_custom !== null || $type_id === 6 && $type_custom === null) {
					return redirect()->back()->with("error", "Please specify document type");
				} else {
					$doc_type = $type_custom;
				}

				$request->merge(['client_id' => $id]);
				$FlClientsFiles = FlClientsFiles::where('client_id', $id)->where('type_id', $type_id)->where('type_id', '!=', 5)->first();
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
						Storage::delete("clients/$id/documents/$FlClientsFiles->file");
					}
					$filenameWithExt = $file->getClientOriginalName();
					//Get Just Filename
					$fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
					//Get Just Extension
					$fileExtension = $file->getClientOriginalExtension();
					//Filename To Store
					$fileNameToStore = $alias . "." . $fileExtension;
					//Upload Image
					$path = $file->storeAs("clients/$id/documents", $fileNameToStore);
					if ($FlClientsFiles !== null) { $FlClientsFiles->update($request->all()); }
					else { $FlClientsFiles = FlClientsFiles::create($request->all()); }
					$FlClientsFiles->update(['file' => $fileNameToStore]);

					$function = "document";
					if ($loan_status === null && $file !== null) { Client::find($id)->notify(new clientsNotifications($alias,$function)); }
				}
			}
//			else { return redirect()->back()->with("error", "No file detected!"); }

			if ($account_manager !== null && $file === null) {
				$function = "manager";
				$request->merge(['client_id' => $id]);
				$client_update = Client::where('id', $id)->update(['account_manager' => $request->account_manager]);
				if ($loan_status === null) { Client::find($id)->notify(new clientsNotifications($account_manager,$function)); }
			}

			if ($loan_status !== null) {
				$function = "status";
				$request->merge(['client_id' => $id]);
				$loan_update = FlClientsLoan::where('client_id', $id)
					->where('lender_id', $request->lender_id)
					->update(['loan_status_id' => $request->loan_status_id
					]);
				Client::findOrFail($id)->notify(new clientsNotifications($request->lender_id,$function));
			}

			return redirect()->back()->with("success", "Client's account updated successfully");
			// } catch (\Exception $e) { return redirect()->back()->with("warning", "There was a problem updating client's account. Please try again!"); }
		}

		/* DOC REMOVE */
		public function doc_remove(Request $request)
		{
			$session = Auth::user('client');
			$file_id = $request->file_id;
			$FlClientsFiles = FlClientsFiles::findOrFail($file_id);
			try {
				Storage::delete("clients/$session->id/documents/$FlClientsFiles->file");
				$FlClientsFiles->delete();
				return redirect()->back()->with("success", "File was removed successfully");
			} catch (\Exception $e) {
				return redirect()->back()->with("warning", "File not removed. Please try again!");
			}
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param int $id
		 * @return \Illuminate\Http\Response
		 */
		public function destroy($id)
		{
			try {
				$Client = Client::findOrFail($id);
				Storage::deleteDirectory("clients/$id");
//            Storage::delete("clients/$id/avatar/$Client->avatar");
				$Client->delete();
				return redirect()->back()->with("success", "Client account deleted successfully.");
			} catch (\Exception $e) {
				return redirect()->back()->with("warning", "There was a problem deleting client account. Please try again!");
			}
		}
	}
