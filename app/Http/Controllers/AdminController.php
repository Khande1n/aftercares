<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Service;
use App\User;
use Mail;
use Redirect;

class AdminController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$serviceDatas = Service::where('status', '=', 'Pending') -> get();

		$serviceWorkings = Service::where('status', '=', 'Working') -> get();

		$serviceCompletes = Service::where('status', '=', 'Completed') -> get();

		$technicians = User::where('role_id', '=', 3) -> get();

		$users = User::all();

		return view('/adminDashboard', compact('serviceDatas', 'technicians', 'users', 'serviceWorkings', 'serviceCompletes'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return Response
	 */
	public function store(Request $request) {
		$validator = Validator::make($request -> all(), ['name' => 'required|max:255', 'email' => 'email|max:255', 'contact' => 'required|integer|max:9999999999|unique:users', 'password' => 'required|confirmed|min:6', 'role_id' => 'required|integer', ]);

		if ($validator -> fails()) {
			return redirect('/adminDashboard') -> withErrors($validator) -> withInput();
		}else{
			$user = User::create(['name' => $request -> name, 'email' => $request -> email, 'contact' => $request -> contact, 'address' => $request -> address, 'password' => bcrypt($request -> password), 'role_id' => $request -> role_id, ]);

			if (isset($user)) {
				return Redirect::to('/adminDashboard');
			}
		}

		

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$services = Service::findOrFail($request -> submit);

		$services -> update(['technician' => $request -> technician, 'status' => 'Working', ]);

		$user = User::where('id', '=', $services -> user_id) -> get() -> first();

		if (isset($services -> technician) && ($services -> status == "Working")) {

			Mail::send('auth/emails.statusWorking', ['services' => $services], function($m) use ($user) {

				$m -> from('support@aftercares.in', 'Team AfterCares');

				$m -> to($user -> email, $user -> name) -> subject('We are working on your request now');
			});

			return back() -> withInput();
		}

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function requestStatus(Request $request) {
		$services = Service::findOrFail($request -> submit);

		$services -> update(['status' => $request -> status]);

		$user = User::where('id', '=', $services -> user_id) -> get() -> first();

		if (isset($services -> status)) {

			Mail::send('auth/emails.statusChange', ['services' => $services], function($m) use ($user) {

				$m -> from('support@aftercares.in', 'Team AfterCares');

				$m -> to($user -> email, $user -> name) -> subject('Change in status of request');
			});

			return back() -> withInput();
		}

	}

	/**
	 * Send an e-mail to aftercares from dashboard.
	 *
	 * @param  Request  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function sendEmailHome(Request $request) {
		$emailto = $request -> emailto;
		$subject = $request -> subject;
		$mailcontent = $request -> mailcontent;

		Mail::send('auth/emails.mailAC', ['mailcontent' => $mailcontent], function($m) use ($emailto, $subject) {
			$m -> from('support@aftercares.in', 'Team AfterCares');

			$m -> to($emailto, 'Hello') -> subject($subject);
		});

		return Redirect::to('/adminDashboard');
	}

}
