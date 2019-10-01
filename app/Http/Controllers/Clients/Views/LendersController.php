<?php

	namespace App\Http\Controllers\Clients\Views;

	use App\Client;
	use App\FlClientsFunding;
	use App\FlClientsLoan;
	use App\FlCompanyDetail;
	use App\FlLendersDetails;
	use App\FlLendingCountry;
	use App\FlLoansDuration;
	use App\FlLoansPurpose;
	use App\FlProduct;
	use App\Http\Controllers\Controller;
	use App\Lender;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;

	class LendersController extends Controller
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
			$client = Client::findOrFail($session->id);
			$clientCompany = FlCompanyDetail::where('client_id', $client->id)->first();
			$FlClientsFunding = FlClientsFunding::where('client_id', $client->id)->first();

			if ($FlClientsFunding !== null) {
				$Lender = FlLendersDetails::where('lender_industry', $clientCompany->industry_id)
					->orWhere('business_structure', $clientCompany->business_structure_id)
					->orWhere('minmax_length', $FlClientsFunding->loan_duration_id)
					->paginate(5);
			} else {
				$Lender = FlLendersDetails::where('lender_industry', $clientCompany->industry_id)
					->orWhere('business_structure', $clientCompany->business_structure_id)
					->paginate(5);
			}

			$FlLoanDuration = FlLoansDuration::all();
			$FlLoanPurpose = FlLoansPurpose::all();
			// dd($FlClientsLoan);
			return view('clients.lenders.index')
				->with('session', $session)
				->with('client', $client)
				->with('loanDurations', $FlLoanDuration)
				->with('loanPurposes', $FlLoanPurpose)
				// ->with('loans', $FlClientsLoan)
				->with('funding', $FlClientsFunding)
				->with('lenders', $Lender);
		}

		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\View\View
		 */
		public function search(Request $request)
		{
			$search_key = $request->search_key;
			$session = Auth::user('client');
			$client = Client::findOrFail($session->id);
			// $FlClientsLoan = FlClientsLoan::where('client_id', $client->id)->get();
//        $Lender = Lender::where('company_name','LIKE','%'.$search_key.'%')->get();paginate(5);
			$FlLendersDetails = FlLendersDetails::where('company_name', 'LIKE', '%' . $search_key . '%')->paginate(5);
			$FlLoanDuration = FlLoansDuration::all();
			$FlLoanPurpose = FlLoansPurpose::all();
			$FlClientsFunding = FlClientsFunding::where('client_id', $client->id)->first();
			// dd($FlClientsLoan);
			return view('clients.lenders.search')
				->with('session', $session)
				->with('client', $client)
				->with('loanDurations', $FlLoanDuration)
				->with('loanPurposes', $FlLoanPurpose)
				// ->with('loans', $FlClientsLoan)
				->with('funding', $FlClientsFunding)
				->with('lenderDetails', $FlLendersDetails);
//            ->with('lenders', $Lender);
		}

		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\View\View
		 */
		public function profile($id)
		{
			$session = Auth::user('client');
			$client = Client::findOrFail($session->id);
			$client_loan = FlClientsLoan::where('client_id', $session->id)->first();
			$Lender = Lender::where('id', $id)->first();
			$FlLoanDuration = FlLoansDuration::all();
			$FlLoanPurpose = FlLoansPurpose::all();
			$FlClientsLoan = FlClientsLoan::where('client_id', $client->id)->get();
			$FlClientsFunding = FlClientsFunding::where('client_id', $client->id)->first();

			return view('clients.lenders.profile')
				->with('session', $session)
				->with('client', $client)
				->with('clientLoan', $client_loan)
				->with('loanDurations', $FlLoanDuration)
				->with('loanPurposes', $FlLoanPurpose)
				->with('loans', $FlClientsLoan)
				->with('funding', $FlClientsFunding)
				->with('lender', $Lender);
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
