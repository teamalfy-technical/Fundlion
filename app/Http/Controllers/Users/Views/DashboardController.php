<?php

namespace App\Http\Controllers\Users\Views;

use App\FlClientsLoan;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
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
        return view('users.dashboard.index')
            ->with('session',$session)
            ->with('admin',$User);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function provider(Request $request)
    {
//        try {
//            if ($email_check != null) {
//                $message = "This email already EXISTS!";
//                $error = "email";
//                return redirect()->back()->with('error', "Email already EXISTS! Please try again.");
//            }
//            if ($phone_check != null) {
//                $message = "This phone number already EXISTS!";
//                $error = "phone";
//                return redirect()->back()->with('error', "Phone number already EXISTS! Please try again.");
//            }
                $provider = $request->provider;
                $FlClientsLoan = FlClientsLoan::where('id',$provider)->first();

                if ($FlClientsLoan) {
                    $amount = $FlClientsLoan->loan_amount;
                    $status = $FlClientsLoan->loan_status_id;
                    $error = 0;
                    }

                echo json_encode(array('error'=>$error,'message'=>$message));
//            }

//        echo json_encode(array('error'=>$error,'message'=>$message));
//        $provider = $request->provider;
//        $value = FlClientsLoan::where('id',$provider)->first();

//        return json_encode(array('provider'=>"works very well"));
//        return  response()->json(['provider'=>"works very well"]);

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
