<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	
	protected $table = 'roles';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'role'];
        
		
    /**
     * Get the users for the given role.
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }


}
