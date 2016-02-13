<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class WebsiteController extends Controller 
{
	/**
	 * Display the website.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		
		return view('welcome');
	}
	
	/**
	 * Sent mail to AfterCares from website.
	 *
	 * @param  Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function websiteEmail(Request $request) 
	{
		
		$name = $request -> name;
		$email = $request -> email;
		$message = $request -> message;
	
		Mail::send('auth/emails.websiteEmail', ['request' => $request], function($m) use ($name, $email) {
			$m -> to('support@aftercares.in', 'Team AfterCares');
			$m -> from($email, $name) -> subject('New Query');
		});
		
		
		
		return back();
	}

}
