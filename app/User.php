<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'contact', 'password', 'address', 'role_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	
	public function getIsAdminAttribute()
	{
    	return true;
	}


	/**
     * Get the role that user has.
     */
    public function roles()
    {
        return $this->belongsTo('App\Role');
    }
	
			
    /**
     * Get the services for the given user.
     */
    public function services()
    {
        return $this->hasMany('App\Service');
    }

	
}
