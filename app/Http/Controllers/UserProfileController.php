<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\User;
use DB;
use Auth;
use Redirect;
use Validator;
use Mail;


class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$userData = User::findOrFail(Auth::user()->id);
		
        return view('profile.index', compact('userData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	// return redirect('')->withInput();
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
    public function edit()
    {
    	
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$validator = Validator::make($request->all(), [
			'email'     => 'required|email',     
        	'contact'   => 'required|integer|max:9999999999'
		]); 
    
		if ($validator->fails()) {

        	return redirect('/profile')
                        ->withErrors($validator)
                        ->withInput();

    	} else {
    		$user = User::findOrfail(Auth::user()->id);
		
    		$users = $user->update([
					'name' 		=> ucwords($request->name),
					'email' 	=> $request->email,
					'contact' 	=> $request->contact,
					'address' 	=> $request->address,
			]);
			
			return Redirect::to('/home');
		}
			
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
	
	/**
     * Send an e-mail to aftercares from dashboard.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendEmailHome(Request $request)
    {
    	$subject = $request->subject;
		$mailcontent = $request->mailcontent;
		
        $user = User::findOrFail(Auth::user()->id);
		
		Mail::send('auth/emails.home', ['mailcontent' => $mailcontent], function ($m) use ($user,$subject) {
            $m->to('support@aftercares.in', 'Your Test Mail');

            $m->from($user->email, $user->name)->subject($subject);
        });

		return Redirect::to('/home');
    }
}
