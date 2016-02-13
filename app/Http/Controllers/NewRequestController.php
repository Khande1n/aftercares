<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service;
use Input;
use Mail;
use User;

class NewRequestController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		
		return view('request.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		
		return view('request.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
			
		
		$services = Service::create([
			'brand'		=> ucwords($request->brand),
			'product' 	=> ucwords($request->product),
			'variant'	=> ucwords($request->variant),
			'age'		=> $request->age,
			'pincode'	=> $request->pincode,
			'status'	=> $request->status,
			'user_id'	=> $request->user_id,
		]);
		
		Mail::send('auth/emails.request', ['services' => $services], function ($m) use ($services) {
			
            $m->to('support@aftercares.in', 'Team AfterCares');

            $m->from('support@aftercares.in', 'Team AfterCares')->subject('New Service Request');
        });
		
		return json_encode($services);
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$requestData = Request::findOrFail($id);

		return view('request.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$requestData = Request::findOrFail($id);

		return view('request.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$requestData = Request::findOrFail($id);

		return Redirect::route('request.show');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		Request::destroy($id);
		
		return Redirect::route('request.show');
	}

}
