<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
	
	protected $table = 'variants';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['variant'];
        
		
    /**
     * Get the product to which the product belongs.
     */
    public function products()
    {
        return $this->belongsTo('App\Product');
    }

}
