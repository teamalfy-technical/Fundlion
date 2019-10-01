<?php

namespace App\Http\Controllers\Clients\Views;

use App\Client;
use App\FlClientsLoan;
use App\FlLendersDetails;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoansController extends Controller
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
        $FlClientsLoan = FlClientsLoan::where('client_id',$session->id)->orderBy('id','desc')->paginate(10);
        $FlLendersDetails = FlLendersDetails::all();
        return view('clients.loans.index')
            ->with('session',$session)
            ->with('loans',$FlClientsLoan)
            ->with('details',$FlLendersDetails)
            ->with('client',$client);
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $session = Auth::user('client');
        try {
            $request->merge(['client_id' => $session->id]);
            $FlMessage = FlClientsLoan::create($request->all());
            return redirect()->back()->with('success', 'Your loan application has been submitted successfully!');
        } catch (\Exception $e) { return redirect()->back()->withInput($request->all())->with(['warning', 'There was a problem applying for your loan. Please try again later!']);}
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
