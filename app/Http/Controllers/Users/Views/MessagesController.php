<?php

	namespace App\Http\Controllers\Users\Views;

	use App\Client;
	use App\FlMessage;
	use App\Http\Controllers\Controller;
	use App\User;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;

	class MessagesController extends Controller
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
			$User = User::findOrFail($session->id);
			$Client = Client::where('account_manager', $User->id)->get();
			$FlMessage = FlMessage::paginate(10);
			return view('users.messages.index')
				->with('session', $session)
				->with('messages', $FlMessage)
				->with('clients', $Client)
				->with('admin', $User);
		}

        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\View\View
         */
        public function search(Request $request)
        {
            $search_key = $request->search_key;
            $session = Auth::user();
            $User = User::findOrFail($session->id);
            $FlMessage = FlMessage::where('subject', 'LIKE', '%' . $search_key . '%')
                ->orWhere('message', 'LIKE', '%' . $search_key . '%')
                ->paginate(10);

            return view('users.messages.search')
                ->with('session', $session)
                ->with('admin', $User)
                ->with('messages', $FlMessage);
        }

		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\View\View
		 */
		public function sent()
		{
            $session = Auth::user();
            $User = User::findOrFail($session->id);
            $Client = Client::where('account_manager', $User->id)->get();
            $FlMessage = FlMessage::paginate(10);
			return view('users.messages.sent')
				->with('session', $session)
				->with('messages', $FlMessage)
				->with('clients', $Client)
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
		 * @return \Illuminate\Http\RedirectResponse
		 */
		public function store(Request $request)
		{
			$session = Auth::user();
			$User = User::findOrFail($session->id);
			try {
				$request->merge(['manager_id' => $User->id]);
				$request->merge(['subject' => ucwords($request->subject)]);
				$FlMessage = FlMessage::create($request->all());
				return redirect()->back()->with('success', 'Your message has been sent successfully!');
			} catch (\Exception $e) { return redirect()->back()->withInput($request->all())->with(['warning', 'There was a problem sending your message. Please try again!']); }
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @param \Illuminate\Http\Request $request
		 * @return \Illuminate\Http\RedirectResponse
		 */
		public function reply(Request $request, $id)
		{
			$session = Auth::user();
            $User = User::findOrFail($session->id);
			$msgUpdate = FlMessage::findOrFail($id);
            try {
                $request->merge(['subject' => ucwords($request->subject)]);
                $request->merge(['message_id' => $id]);
                $request->merge(['manager_id' => $User->id]);
                $FlMessage = FlMessage::create($request->all());
				$replied = $msgUpdate->update(['replied' => 1]);
				return redirect()->back()->with('success', 'Your message has been sent successfully!');
			} catch (\Exception $e) { return redirect()->back()->withInput($request->all())->with(['warning', 'There was a problem sending your message. Please try again!']); }
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
			//
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
                $FlMessage = FlMessage::findOrFail($id)->delete();
                return redirect()->back()->with("success", "Message deleted successfully.");
            } catch (\Exception $e) { return redirect()->back()->with("warning", "There was a problem deleting message. Please try again!"); }
		}
	}
