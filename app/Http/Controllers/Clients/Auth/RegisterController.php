<?php

namespace App\Http\Controllers\Clients\Auth;

use App\Client;
use App\FlClientsFunding;
use App\FlClientsLoan;
use App\FlCompanyDetail;
use App\FlCountry;
use App\FlIndustries;
use App\FlRevenue;
use App\FlRole;
use App\FlBusinessStructure;
use App\FlTradingFor;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        $FlCountry = FlCountry::all();
        $FlIndustries = FlIndustries::all();
        $FlTradingAs = FlBusinessStructure::all();
        $FlTradingFor = FlTradingFor::all();
        $FlRevenue = FlRevenue::all();
        $FlRole = FlRole::all();
        return view('clients.auth.register')
            ->with('countries', $FlCountry)
            ->with('industries', $FlIndustries)
            ->with('trading_as', $FlTradingAs)
            ->with('trading_for', $FlTradingFor)
            ->with('revenues', $FlRevenue)
            ->with('roles', $FlRole);
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/clients/lenders';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:client');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $create = event(new Registered($user = $this->create($request->all())));
        $last_client = Client::orderBy('id','desc')->first();
        if ($create) {
            $request->merge(['client_id' => $last_client->id]);
            $FlCompanyDetail = FlCompanyDetail::create($request->all());
            if ($request->loan_amount !== null && $request->loan_purpose_id !== null && $request->loan_duration_id !== null) {
                $FlClientsLoan = FlClientsFunding::create($request->all());
            }
            if (!$FlCompanyDetail) { $delete_client = Client::where('id',$last_client->id)->delete(); }
        }
        $this->guard()->login($user);
        return $this->registered($request, $user)
            ?: redirect($this->redirectPath())->with(['success' => 'Your account has been created successfully! You are now logged into your Fundlion account.']);
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'city' => ['required', 'string', 'max:191'],
            'zip' => ['required', 'string', 'max:25'],
            'phone' => ['required', 'string', 'max:35', 'unique:clients'],
            'business_phone' => ['required', 'string', 'max:35', 'unique:fl_company_details'],
            'address_one' => ['required', 'string', 'max:191'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users', 'unique:clients'],
            'first_name' => ['required', 'string', 'max:191'],
            'last_name' => ['required', 'string', 'max:191'],
            'role_id' => ['required', 'string', 'max:25'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $manager = \App\User::where('role_id',2)->inRandomOrder()->first();
        if ($manager !== null) { $id = $manager->id; }
        elseif ($manager === null) { $id = "0"; }
        return Client::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'role_id' => $data['role_id'],
            'account_manager' => $id,
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('client');
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        return redirect(route('clients.lenders'))
            ->with(['success' => 'Your account has been created successfully! You are now logged into your Fundlion account.']);
    }
}
