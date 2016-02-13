<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	
	protected $table = 'products';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'product'];
        
		
    /**
     * Get the brand to which the product belongs.
     */
    public function brands()
    {
        return $this->belongsTo('App\Brand');
    }

		
    /**
     * Get the variants for the given product.
     */
    public function variants()
    {
        return $this->hasMany('App\Variant');
    }

}
