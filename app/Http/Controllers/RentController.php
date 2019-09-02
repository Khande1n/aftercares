<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\RentRequest;
use App\Http\Controllers\Controller;
use App\Rent;
use Auth;
use Image;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view('rent.index');
    }
	
	/**
     * Display a listing of the resource.
     */
    public function addPhoto($user_id, $product, $status, Request $request)
    {
		//$this->validate($request, [
			
			//'photo' => 'required|mimes:jpg, jpeg, png, bmp'
			
		//]);	
			
		
		$rent = Rent::locatedAt($user_id, $product, $status);
		
		if ($rent->user_id !== \Auth::id()) {
			
			if ($request->ajax()) {
				return response(['message' => 'No Way.'], 403);
			}
			
			flash('No way.');
			
			return redirect ('/');
		}
			
		
		$file = $request->file('photo');
		
		$name = time() . $file->getClientOriginalName();
		
		$file->move('rent_ac_images', $name);
		
		$img = Image::make("rent_ac_images/{$name}")->fit(250)->save("rent_img_thumbnail/th-{$name}");	
		
		$rent->photos()->create(['path' => "/rent_ac_images/{$name}", 'thumbnail_path' => "/rent_img_thumbnail/th-{$name}"]);
		
    }

	/**
     * Store the AC service request into database.
	 * 
	 * @param RentRequest $request
	 * 
	 * @return Response
     */
    public function store(RentRequest $request)
    { 
		$rents = Rent::create([
			'product' 	=> $request->product,
			'brand'		=> $request->brand,
			'variant'	=> $request->variant,
			'age'		=> $request->age,
			'address'	=> $request->address,
			'status'	=> $request->status,
			'user_id'	=> $request->user_id,
		]);
		
		return redirect($rents->user_id.'/'.$rents->product.'/'.$rents->status);
    }
	
	
    /**
     * Display the specified AC on rent
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
     public function show($user_id, $product, $status)
	{
		$rentData = Rent::locatedAt($user_id, $product, $status);
		
		return view('rent.show', compact('rentData'));
	}
	
	public function rentAd()
	{
		
	}
}
