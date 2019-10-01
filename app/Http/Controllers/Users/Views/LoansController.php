<?php

namespace App\Http\Controllers\Users\Views;

use App\Client;
use App\FlClientsLoan;
use App\FlLendersDetails;
use App\FlClientsFunding;
use App\Lender;
use App\User;
//use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Barryvdh\DomPDF\Facade as PDFF;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Barryvdh\Snappy\Facades\SnappyImage as SnappyImage;

class LoansController extends Controller
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
        $FlClientsLoan = FlClientsLoan::paginate(10);
        $Lender = Lender::all();
        return view('users.loans.index')
            ->with('session',$session)
            ->with('loans',$FlClientsLoan)
            ->with('lenders',$Lender)
            ->with('admin',$User);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function printPDF(Request $request, $loan_id)
    {
        $session = Auth::user();
        $User = User::findOrFail($session->id);
        $notes = request()->loan_notes;

        $FlClientsLoan = FlClientsLoan::where('id', $loan_id)->first();
        $FlClientsFunding = FlClientsFunding::where('id', $FlClientsLoan->client_id)->first();
        $Client = Client::where('id',$FlClientsLoan->client_id)->first();
        $Lender = Lender::where('id',$FlClientsLoan->lender_id)->first();

        $date = date('d/m/y', strtotime($FlClientsLoan->created_at));
        $time = date('G:i', strtotime($FlClientsLoan->created_at));

        // This  $data array will be passed to our PDF blade
        $data = ['title' => 'Fundlion Customer Loan Application Form',
            'heading' => 'FUNDLION CUSTOMER LOAN APPLICATION FORM',
            'fundingInfo' => $FlClientsFunding,
            'loanInfo' => $FlClientsLoan,
            'lenderInfo' => $Lender,
            'clientInfo' => $Client,
        ];
        $pdf = PDFF::loadView('users.loans.pdfprint', $data);
        return $pdf->stream('medium.pdf');
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
    public function store(Request $request, $id)
    {
        $session = Auth::user('client');
        $client = User::findOrFail($session->id);
        try {
            $FlMessage = FlClientsLoan::where('client_id',$id)->first()->update($request->all());
            return redirect()->back()->with('success', 'Your loan application has been submitted successfully!');
        } catch (\Exception $e) { return redirect()->back()->withInput($request->all())->with('warning', 'There was a problem applying for your loan. Please try again later!');}
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
        $session = Auth::user();
        $admin = User::findOrFail($session->id);
        $notes = $request->loan_notes;
        try {
            $FlMessage = FlClientsLoan::where('id',$id)->first()->update($request->all());
            return redirect()->back()->with('success', 'Your loan application has been updated successfully!');
        } catch (\Exception $e) { return redirect()->back()->withInput($request->all())->with('warning', 'There was a problem updateing your loan. Please try again later!');}
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
