<?php

namespace App\Http\Controllers\Users\Views;

use App\FlUsersRole;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AccountsController extends Controller
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
        $User = User::where('id',$session->id)->first();
        $Users = User::all();
        $FlUsersRole = FlUsersRole::all();
        return view('users.accounts.index')
            ->with('session',$session)
            ->with('userRoles',$FlUsersRole)
            ->with('admin',$User)
            ->with('users',$Users);
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
        $password = "fund123@4.5";
        $hash = Hash::make($password);
//        dd($hash);
        try {
            $request->merge(['password' => $hash]);
            $request->merge(['client_id' => Auth::user()->id]);
            $User = User::create($request->all());
            return redirect()->back()->with("success", "Account created successfully.");
        } catch (\Exception $e) { return redirect()->back()->with("warning", "There was a problem creating your account. Please try again!"); }
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        try {
//            $request->merge(['client_id' => Auth::user()->id]);
            $User = User::where('id',$id)->first()->update($request->all());
            return redirect()->back()->with("success", "Account updated successfully.");
        } catch (\Exception $e) { return redirect()->back()->with("warning", "There was a problem updating your account. Please try again!"); }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $User = User::findOrFail($id);
            Storage::deleteDirectory("users/$id");
//            Storage::delete("users/$id/avatar/$User->avatar");
            $User->delete();
            return redirect()->back()->with("success", "User account deleted successfully.");
        } catch (\Exception $e) { return redirect()->back()->with("warning", "There was a problem deleting user account. Please try again!"); }
    }
}
