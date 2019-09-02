<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;


class Photo extends Model
{
	
	protected $table = 'photo_rents';
	
	protected $fillable = ['path', 'thumbnail_path'];
	
    public function rent()
    {
        return $this->belongsTo('App\Rent');
    }
	
	
    public function delete(){
		
		File::delete([
			
		]);
		
		parent::delete();
		
  	}
	
}
