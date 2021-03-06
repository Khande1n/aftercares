<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Photo;
use Storage;


class PhotoController extends Controller
{
	
	public function destroy($id)
	{
		
		Photo::findOrFail($id)->delete();

		return back();
		
	}
}
