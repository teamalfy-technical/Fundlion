<?php

namespace App\Http\Controllers\Clients\Views;

use App\Client;
use App\FlClientsFunding;
use App\FlClientsLoan;
use App\FlLendersDetails;
use App\FlLoansDuration;
use App\FlLoansPurpose;
use App\Lender;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
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
        $Lender = Lender::all();
        $FlLoanDuration = FlLoansDuration::all();
        $FlLoanPurpose = FlLoansPurpose::all();
        $FundingOptions = FlClientsFunding::where('id',$client->id)->first();
        $FlClientsLoan = FlClientsLoan::where('client_id',$client->id)->get();
        return view('clients.dashboard.index')
            ->with('session',$session)
            ->with('client',$client)
            ->with('loanDurations',$FlLoanDuration)
            ->with('loanPurposes',$FlLoanPurpose)
            ->with('loans',$FlClientsLoan)
            ->with('funding',$FundingOptions)
            ->with('lenders',$Lender);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function funding_old(Request $request)
    {
        try {
            $FundingSet = FlClientsFunding::create($request->all());
            return redirect(route('clients.lenders'))->with("success", "You have successfully set your funding options. You can now apply for a loan.");
        } catch (\Exception $e) { return redirect()->back()->with("warning", "There was a problem getting funding options. Please try again!");}
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function funding(Request $request)
    {
        $session = Auth::user('client');
        $clientFunding = FlClientsFunding::where('client_id',$session->id)->first();
//        dd($request->all());
//        try {
            if($clientFunding !== null) { $clientFunding->update($request->all()); }
            else { $funding = FlClientsFunding::create($request->all()); }
            return redirect(route('clients.lenders'))->with("success", "You have successfully set your funding options. You can now apply for a loan.");
//        } catch (\Exception $e) { return redirect()->back()->with("warning", "There was a problem getting funding options. Please try again!");}
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function loanDetail(Request $request)
    {
        $dataVal = $request->dataVal;

        $FlClientsLoan = FlClientsLoan::where('id',$dataVal)->first();
        $loanAmount = $FlClientsLoan->loan_amount;
        $loanStatus = $FlClientsLoan->loan_status_id;
        $status = "success";
//        dd($loanAmount);
        $data = array(
            'id' => $dataVal,
            'status' => $status,
            'loanAmount' => "£".number_format($loanAmount, 2),
            'loanStatus' => $loanStatus,
        );

//        echo json_encode(array('id'=>$provider,'status'=>$status,'loanAmount'=>$loanAmount,'loanStatus'=>$loanStatus));
//        $provider = $request->provider;
//        $value = FlClientsLoan::where('id',$provider)->first();

//        return json_encode(array('provider'=>"works very well"));
        return response()->json($data);
//        return response()->json(['data'=>$data]);

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
