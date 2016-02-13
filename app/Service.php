<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $table = 'services';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand', 'product', 'variant', 'age', 'pincode', 'technician', 'status', 'rating', 'user_id'
    ];
	
				
    /**
     * Get the user to which the service belong.
     */
    public function users()
    {
        return $this->belongsTo('App\User');
    }
	
}
