<?php

namespace App\Http\Controllers\Pages;

use App\Client;
use App\FlCareers;
use App\FlCareersCategories;
use App\FlClientsFunding;
use App\FlClientsLoan;
use App\FlCountry;
use App\FlEvents;
use App\FlIndustries;
use App\FlLoan;
use App\FlLoansDuration;
use App\FlLoansPurpose;
use App\FlRevenue;
use App\FlRole;
use App\FlBusinessStructure;
use App\FlTradingFor;
use App\Lender;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $FlLoan = FlLoan::where('type',1)->get();
        return view('pages.home.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('session',$session)
            ->with('loans',$FlLoan);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function loan_detail(Request $request, $alias)
    {
        $session = Auth::user('client');
        $title = ucwords(str_replace('-', ' ', $alias));
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $LoanDetail = FlLoan::where('title', $title)->first();
        return view('pages.home.loan-detail')
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('session',$session)
            ->with('loanDetail',$LoanDetail);
    }

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function apply(Request $request)
    {
        $request->session()->put('loan_amount', $request->loan_amount);
        $request->session()->put('loan_purpose_id', $request->loan_purpose_id);
        $request->session()->put('loan_duration_id', $request->loan_duration_id);
        return redirect(route('clients.register'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        return view('pages.terms.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('session',$session)
            ->with('loanPurposes',$FlLoanPurpose);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        return view('pages.privacy.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('session',$session)
            ->with('loanPurposes',$FlLoanPurpose);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        return view('pages.about.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('session',$session)
            ->with('loanPurposes',$FlLoanPurpose);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function team()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        return view('pages.team.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('session',$session)
            ->with('loanPurposes',$FlLoanPurpose);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function helping_small_business()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        return view('pages.helping-small-business.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('session',$session)
            ->with('loanPurposes',$FlLoanPurpose);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function small_business_loans()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $FlLoan = FlLoan::where('type',1)->get();
        return view('pages.small-business-loans.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('session',$session)
            ->with('loans',$FlLoan)
            ->with('loanPurposes',$FlLoanPurpose);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function funding()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        return view('pages.funding.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('session',$session)
            ->with('loanPurposes',$FlLoanPurpose);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lending()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $FlLoan = FlLoan::where('type',1)->get();

        return view('pages.lending.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('session',$session)
            ->with('loans',$FlLoan)
            ->with('loanPurposes',$FlLoanPurpose);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        return view('pages.news.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('session',$session)
            ->with('loanPurposes',$FlLoanPurpose);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news_detail()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        return view('pages.news.detail')
            ->with('loanDurations',$FlLoanDuration)
            ->with('session',$session)
            ->with('loanPurposes',$FlLoanPurpose);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function events()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $FlEvents = FlEvents::paginate(5);
        return view('pages.events.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('session',$session)
            ->with('events',$FlEvents);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function events_detail(Request $request, $alias)
    {
        $session = Auth::user('client');
        $title = ucwords(str_replace('-', ' ', $alias));
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $FlEventsAll = FlEvents::orderBy('id','desc')->limit(3)->get();
        $FlEvents = FlEvents::where('title',$title)->first();
        return view('pages.events.detail')
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('events',$FlEventsAll)
            ->with('session',$session)
            ->with('event',$FlEvents);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function investor_relations()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        return view('pages.investor-relations.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('session',$session)
            ->with('loanPurposes',$FlLoanPurpose);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        return view('pages.contact.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('session',$session)
            ->with('loanPurposes',$FlLoanPurpose);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function careers()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $careerCategories = FlCareersCategories::all();
        $careers = FlCareers::all();
        return view('pages.careers.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('careersCategories',$careerCategories)
            ->with('session',$session)
            ->with('careers',$careers);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function careers_categories(Request $request, $alias)
    {
        $session = Auth::user('client');
        $title = ucwords(str_replace('-', ' ', $alias));
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $FlCareersCategories = FlCareersCategories::where('title', $title)->first();
        $FlCareers = FlCareers::where('cat_id',$FlCareersCategories->id)->get();
        return view('pages.careers.categories')
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('careerCategory',$FlCareersCategories)
            ->with('session',$session)
            ->with('careers',$FlCareers);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function careers_details(Request $request, $category, $alias)
    {
        $session = Auth::user('client');
        $category = ucwords(str_replace('-', ' ', $category));
        $title = ucwords(str_replace('-', ' ', $alias));
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $FlCareers = FlCareers::where('title',$title)->first();
        $FlCareersCategories = FlCareersCategories::where('title', $category)->first();
        return view('pages.careers.detail')
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('careerCategory',$FlCareersCategories)
            ->with('session',$session)
            ->with('career',$FlCareers);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function appointment()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $careerCategories = FlCareersCategories::all();
        $careers = FlCareers::all();
        return view('pages.appointment.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('careersCategories',$careerCategories)
            ->with('session',$session)
            ->with('careers',$careers);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function industry()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $careerCategories = FlCareersCategories::all();
        $FlLoan = FlLoan::where('type',1)->get();

        $careers = FlCareers::all();
        return view('pages.industry-specific.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('careersCategories',$careerCategories)
            ->with('session',$session)
            ->with('loans',$FlLoan)
            ->with('careers',$careers);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function large_corporate_funding()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $careerCategories = FlCareersCategories::all();
        $careers = FlCareers::all();
        return view('pages.large-corporate-funding.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('careersCategories',$careerCategories)
            ->with('session',$session)
            ->with('careers',$careers);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function investing_in_the_future()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $careerCategories = FlCareersCategories::all();
        $careers = FlCareers::all();
        return view('pages.investing-in-the-future.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('careersCategories',$careerCategories)
            ->with('session',$session)
            ->with('careers',$careers);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $careerCategories = FlCareersCategories::all();
        $careers = FlCareers::all();
        return view('pages.faq.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('careersCategories',$careerCategories)
            ->with('session',$session)
            ->with('careers',$careers);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function introducers_and_brokers()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $careerCategories = FlCareersCategories::all();
        $careers = FlCareers::all();
        return view('pages.introducers-and-brokers.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('careersCategories',$careerCategories)
            ->with('session',$session)
            ->with('careers',$careers);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function banking_and_lending_partnership()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $careerCategories = FlCareersCategories::all();
        $careers = FlCareers::all();
        return view('pages.banking-and-lending-partnership.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('careersCategories',$careerCategories)
            ->with('session',$session)
            ->with('careers',$careers);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function become_a_lending_partner()
    {
        $session = Auth::user('client');
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $careerCategories = FlCareersCategories::all();
        $careers = FlCareers::all();
        return view('pages.become-a-lending-partner.index')
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('careersCategories',$careerCategories)
            ->with('session',$session)
            ->with('careers',$careers);
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
