<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Tracker;
use App\User;
use App\Service;

class TrackerController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() 
	{
		$users = User::where('role_id', 1)->get();
		
		$services = Service::all();
		
		$visitor = Tracker::currentSession();
		
		return view('tracker.index', compact('visitor','users','services' ));
	}
}
