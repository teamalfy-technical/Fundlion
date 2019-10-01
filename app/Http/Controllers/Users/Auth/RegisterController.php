<?php

	namespace App\Http\Controllers\Users\Auth;

	use App\Http\Controllers\Controller;
	use App\User;
	use Illuminate\Foundation\Auth\RegistersUsers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\Hash;
	use Illuminate\Support\Facades\Validator;

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
		 * Where to redirect users after registration.
		 *
		 * @var string
		 */
		protected $redirectTo = '/users/login';

		/**
		 * Create a new controller instance.
		 *
		 * @return void
		 */
		public function __construct()
		{
			$this->middleware('guest');
		}

		/**
		 * Show the application registration form.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function showRegistrationForm()
		{
			return view('users.auth.register');
		}

		/**
		 * Get a validator for an incoming registration request.
		 *
		 * @param array $data
		 * @return \Illuminate\Contracts\Validation\Validator
		 */
		protected function validator(array $data)
		{
			return Validator::make($data, [
				'name' => ['required', 'string', 'max:191'],
				'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'unique:clients'],
//            'phone' => ['required', 'string', 'phone', 'max:35', 'unique:users'],
				'password' => ['required', 'string', 'min:8', 'confirmed'],
			]);
		}

		/**
		 * Create a new user instance after a valid registration.
		 *
		 * @param array $data
		 * @return \App\User
		 */
		protected function create(array $data)
		{
//			dd($data['name']);
			return User::create([
				'name' => $data['name'],
				'email' => $data['email'],
				'phone' => $data['phone'],
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
			return Auth::guard();
		}

		/**
		 * The user has been registered.
		 *
		 * @param \Illuminate\Http\Request $request
		 * @param mixed $user
		 * @return mixed
		 */
		protected function registered(Request $request, $user)
		{
			return redirect(route('users.login'))
				->with(['success' => 'Your account has been created successfully! You can now login to your account.']);
		}
	}
