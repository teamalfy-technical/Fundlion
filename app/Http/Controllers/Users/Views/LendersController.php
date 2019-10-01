<?php

	namespace App\Http\Controllers\Users\Views;

	use App\FlAdditionalDocument;
	use App\FlBusinessStructure;
	use App\FlCountry;
	use App\FlIndustries;
	use App\FlLendersDetails;
	use App\FlLendingCountry;
	use App\FlLoansDuration;
	use App\FlLoansPurpose;
	use App\FlMinmaxLength;
	use App\FlProcessTime;
	use App\FlProduct;
	use App\FlResponseTime;
	use App\FlTitle;
	use App\Http\Controllers\Controller;
	use App\Lender;
	use App\User;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\Hash;
	use Illuminate\Support\Facades\Storage;

	class LendersController extends Controller
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
			$user = User::findOrFail($session->id);
			$Lender = Lender::paginate(10);
			$FlTitle = FlTitle::all();
			$FlLendersDetails = FlLendersDetails::all();
			$FlLoansPurpose = FlLoansPurpose::all();
			$FlLoansDuration = FlLoansDuration::all();
			$FlResponseTime = FlResponseTime::all();
			$FlProcessTime = FlProcessTime::all();
			$FlIndustries = FlIndustries::all();
			$FlTradingAs = FlBusinessStructure::all();
			$FlCountry = FlCountry::all();
			$FlProduct = FlProduct::all();
			$FlLendingCountry = FlLendingCountry::all();
			$FlAdditionalDocument = FlAdditionalDocument::all();
			return view('users.lenders.index')
				->with('session', $session)
				->with('admin', $user)
				->with('titles', $FlTitle)
				->with('lenders', $Lender)
				->with('loanPurposes', $FlLoansPurpose)
				->with('loanDurations', $FlLoansDuration)
				->with('responseTimes', $FlResponseTime)
				->with('processTimes', $FlProcessTime)
				->with('industries', $FlIndustries)
				->with('trading_as', $FlTradingAs)
				->with('countries', $FlCountry)
				->with('lendingProducts', $FlProduct)
				->with('lendingCountries', $FlLendingCountry)
				->with('additionalDocuments', $FlAdditionalDocument)
				->with('lenderDetails', $FlLendersDetails);
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
			$user = User::findOrFail($session->id);
//			$Lender = Lender::where('company_name','LIKE','%'.$search_key.'%')->paginate(10);
			$FlLendersDetails = FlLendersDetails::where('company_name','LIKE','%'.$search_key.'%')->paginate(10);
			$FlTitle = FlTitle::all();
			$FlLoansPurpose = FlLoansPurpose::all();
			$FlResponseTime = FlResponseTime::all();
			$FlProcessTime = FlProcessTime::all();
			$FlIndustries = FlIndustries::all();
			$FlTradingAs = FlBusinessStructure::all();
			$FlCountry = FlCountry::all();
			$FlMinmaxLength = FlMinmaxLength::all();
			$FlAdditionalDocument = FlAdditionalDocument::all();
			return view('users.lenders.search')
				->with('session', $session)
				->with('admin', $user)
				->with('titles', $FlTitle)
//				->with('lenders', $Lender)
				->with('loanPurposes', $FlLoansPurpose)
				->with('responseTimes', $FlResponseTime)
				->with('processTimes', $FlProcessTime)
				->with('industries', $FlIndustries)
				->with('trading_as', $FlTradingAs)
				->with('countries', $FlCountry)
				->with('minmax', $FlMinmaxLength)
				->with('additionalDocuments', $FlAdditionalDocument)
				->with('lenderDetails', $FlLendersDetails);
		}

		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\View\View
		 */
		public function logo(Request $request)
		{
			$session = Auth::user();
			$lender_id = $request->lender_id;
			try {
				$Lender = Lender::findOrFail($lender_id->id);
				$alias = strtolower(preg_replace('/\s+/', '-', $Lender->detail['company_name']));
				$avatar = $request->avatar;
				if ($request->hasFile('file')) {
					Storage::delete("lenders/$Lender->id/logo/$Lender->detail['logo']");
					//Get Filename With The Extension
					$filenameWithExt = $avatar->getClientOriginalName();
					//Get Just Filename
					$fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
					//Get Just Extension
					$fileExtension = $avatar->getClientOriginalExtension();
					//Filename To Store
					$fileNameToStore = 'IMG' . '-' . time() . '.' . $fileExtension;
					//Upload Image
					$path = $avatar->storeAs("lenders/$Lender->id/logo/", $fileNameToStore);
					$Lender->update(['file' => $fileNameToStore]);
				} else {
					return redirect()->back()->with("error", "No image detected!");
				}
				return redirect()->back()->with("success", "Company logo was updated successfully");
			} catch (\Exception $e) {
				return redirect()->back()->with("warning", "Company logo not updated. Please try again!");
			}
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
			$session = Auth::user();
			$user = User::findOrFail($session->id);
			$password = "fundlend123@4.5";
			$hash = Hash::make($password);
			try {
				$request->merge(['password' => $hash]);
				$Lender = Lender::create($request->all());
				if ($Lender) {
					$last_lender = Lender::orderBy('id', 'desc')->first();
					$request->merge(['lender_id' => $last_lender->id]);
					$FlLendersDetails = FlLendersDetails::create($request->all());
					return redirect()->back()->with("success", "Lender account created successfully.");
				} else {
					return redirect()->back()->with("error", "There was an error creating your account. Please check and try again!");
				}
			} catch (\Exception $e) {
				return redirect()->back()->with("warning", "There was a problem creating your account. Please check and try again!");
			}
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
		public function update(Request $request)
		{
			try {
				$lender_id = $request->lender_id;
				$Lender = Lender::where('id', $lender_id)->first();
				$products = $request->lending_products;
				$countries = $request->loan_countries;
				$documents = $request->additional_documents;

				if ($products !== null) {
					$lendingProducts = implode(",", $products);
					$request->merge(['lending_products' => $lendingProducts]);
				}
				if ($countries !== null) {
					$loanCountries = implode(",", $countries);
					$request->merge(['loan_countries' => $loanCountries]);
				}
				if ($documents !== null) {
					$additionalDocuments = implode(",", $documents);
					$request->merge(['additional_documents' => $additionalDocuments]);
				}

				$file = $request->file;
				if ($request->hasFile('file')) {
					$logo = FlLendersDetails::where('lender_id', $Lender->id)->first();
					Storage::delete("lenders/$Lender->id/logo/$logo->logo");
					//Get Filename With The Extension
					$filenameWithExt = $file->getClientOriginalName();
					//Get Just Filename
					$fileName = pathinfo($filenameWithExt, PATHINFO_FILENAME);
					//Get Just Extension
					$fileExtension = $file->getClientOriginalExtension();
					//Filename To Store
					$fileNameToStore = 'IMG' . '-' . time() . '.' . $fileExtension;
					//Upload Image
					$path = $file->storeAs("lenders/$Lender->id/logo/", $fileNameToStore);
					$FlLendersDetails = FlLendersDetails::where('lender_id', $lender_id)->update(['logo' => $fileNameToStore]);
				}


				$Lender->update($request->all());
				$FlLendersDetails = FlLendersDetails::where('lender_id', $lender_id)->first()->update($request->all());

				return redirect()->back()->with("success", "Lender account updated successfully.");
			} catch (\Exception $e) { return redirect()->back()->with("warning", "There was a problem updating lender account. Please try again!"); }
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
