<?php

namespace App\Http\Controllers\Clients\Views;

use App\Client;
use App\FlClientsFunding;
use App\FlLendersDetails;
use App\FlLoansDuration;
use App\FlLoansPurpose;
use App\FlMessage;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MessagesController extends Controller
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
        $FlMessage = FlMessage::where('client_id',$client->id)
            ->where('sent_id',2)
            ->paginate(10);
        return view('clients.messages.index')
            ->with('session',$session)
            ->with('messages',$FlMessage)
            ->with('client',$client);
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
		$User = User::all();
		$FlMessage = FlMessage::where('client_id',$client->id)
			->where('subject', 'LIKE', '%' . $search_key . '%')
			->orWhere('message', 'LIKE', '%' . $search_key . '%')
            ->paginate(10);

		return view('clients.messages.search')
			->with('session', $session)
			->with('client', $client)
			->with('messages', $FlMessage);
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function sent()
    {
        $session = Auth::user('client');
        $client = Client::findOrFail($session->id);
        $FlMessage = FlMessage::where('client_id',$client->id)
            ->where('sent_id',1)
            ->paginate(10);
        return view('clients.messages.sent')
            ->with('session',$session)
            ->with('messages',$FlMessage)
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
        $client = Client::findOrFail($session->id);
        try {
            $request->merge(['subject' => ucwords($request->subject)]);
            $request->merge(['client_id' => $client->id]);
//            $request->merge(['sent_id' => 1]);
            $FlMessage = FlMessage::create($request->all());
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) { return redirect()->back()->withInput($request->all())->with(['warning', 'There was a problem sending your message. Please try again!']); }
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
			try {
				$FlMessage = FlMessage::findOrFail($id)->delete();
				return redirect()->back()->with("success", "Message deleted successfully.");
			} catch (\Exception $e) { return redirect()->back()->with("warning", "There was a problem deleting message. Please try again!"); }
    }
}
