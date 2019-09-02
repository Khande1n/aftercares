<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
	protected $fillable = ['product', 'brand', 'variant', 'age', 'address', 'status', 'rental', 'user_id'];
	
   
   /**
     * Scope query to those located at a given address.
     *
     * @param  Builder $query  
     * @param  string $user_id 
     * @param  string $product
     * @param  string $status
     * @return \Illuminate\Database\Eloquent\Builder
     */ 
   public function scopeLocatedAt($query, $user_id, $product, $status)
   {
   		//$product = str_replace('', '', $product);
   		
   		return $query->where(compact('user_id', 'product', 'status'))->firstorFail();
   }
   
    public function photos()
	{
		return $this->hasMany('App\Photo');
	} 
}
