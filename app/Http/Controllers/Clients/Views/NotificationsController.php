<?php

	namespace App\Http\Controllers\Clients\Views;

	use App\Client;
	use App\FlClientsFunding;
	use App\FlLoansDuration;
	use App\FlLoansPurpose;
	use App\Http\Controllers\Controller;
	use App\Lender;
	use App\Notifications\clientsNotifications;
	use http\Client\Curl\User;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Notifications\Notifiable ;

	class NotificationsController extends Controller
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
		 * @return \Illuminate\Http\Response
		 */
		public function index()
		{
			$session = Auth::user('client');
			$client = Client::findOrFail($session->id);
			// $FlClientsLoan = FlClientsLoan::where('client_id', $client->id)->get();
			$Lender = Lender::paginate(5);
			$FlLoanDuration = FlLoansDuration::all();
			$FlLoanPurpose = FlLoansPurpose::all();
			$FlClientsFunding = FlClientsFunding::where('client_id', $client->id)->first();
			// dd($FlClientsLoan);
//        $when = Carbon::now()->addSeconds(10);
//        $client->notify(new clientsNotifications);

			return view('clients.notifications.index')
				->with('session', $session)
				->with('client', $client)
				->with('loanDurations', $FlLoanDuration)
				->with('loanPurposes', $FlLoanPurpose)
				// ->with('loans', $FlClientsLoan)
				->with('funding', $FlClientsFunding)
				->with('lenders', $Lender);

		}

		public function all(Request $request, $id)
		{
			$session = Auth::user('client');
			$client = Client::findOrFail($session->id);
			$client->unreadNotifications()->update(['read_at' => now()]);
			return redirect()->back();
		}

		public function read(Request $request, $id)
		{
			$session = Auth::user('client');
			$client = Client::findOrFail($session->id);
//			dd();
			$notify = $client->notifications()->where('id',$id)->first();
			$update = $notify->update(['read_at' => now()]);
			return redirect()->back();
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
			//
		}
	}
