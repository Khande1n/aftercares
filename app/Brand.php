<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
	
	protected $table = 'brands';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'brand'];
        
		
    /**
     * Get the products for the given brand.
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }

		
    /**
     * Get the variants for the given brand.
     */
    public function variants()
    {
        return $this->hasManyThrough('App\Variant', 'App\Product');
    }


}
