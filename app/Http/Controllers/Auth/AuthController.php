<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Mail;
use Auth;

class AuthController extends Controller {
	/*
	 |--------------------------------------------------------------------------
	 | Registration & Login Controller
	 |--------------------------------------------------------------------------
	 |
	 | This controller handles the registration of new users, as well as the
	 | authentication of existing users. By default, this controller uses
	 | a simple trait to add these behaviors. Why don't you explore it?
	 |
	 */

	use AuthenticatesAndRegistersUsers, ThrottlesLogins;

	/**
	 * Where to redirect users after login / registration.
	 *
	 * @var string
	 */
	// protected $redirectTo = '/home';

	/**
	 * Create a new authentication controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this -> middleware('guest', ['except' => 'logout']);
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data) {
		return Validator::make($data, [
		// 'name' => 'required|max:255',
		// 'email' => 'required|email|max:255|unique:users',
		'contact' => 'required|integer|max:9999999999|unique:users', 'password' => 'required|confirmed|min:6', 'role_id' => 'required|integer', ]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	protected function create(array $data) {
		$user = User::create([
		// 'name' => $data['name'],
		// 'email' => $data['email'],
		'contact' => $data['contact'], 'password' => bcrypt($data['password']), 'role_id' => $data['role_id'], ]);

		Mail::send('auth/emails.registration', ['user' => $user], function($m) use ($user) {
			$m -> to('support@aftercares.in', 'Team AfterCares');
			$m -> from('support@aftercares.in', 'Team AfterCares') -> subject('New User Registered');
		});

		return $user;
	}

	/**
	 * Get the login username to be used by the controller.
	 *
	 * @return string
	 */
	public function loginUsername() {
		return property_exists($this, 'username') ? $this -> username : 'contact';
	}

    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (property_exists($this, 'redirectPath')) {
            return $this->redirectPath;
        }

		if(Auth::user()->role_id == '2'){
			return property_exists($this, 'redirectTo') ? $this->redirectTo : '/adminDashboard';
		}else{
			if (!isset($_COOKIE['firsttime']))
				{
    				setcookie("firsttime", "no");
    				return property_exists($this, 'redirectTo') ? $this->redirectTo : '/profile';
				}else{
					return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
				}	
		}    
    }

}
