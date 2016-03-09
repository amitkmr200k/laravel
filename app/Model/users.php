<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class users extends Model
{
	use SoftDeletes;
     
    public function setPasswordAttribute($pass){

		$this->attributes['password'] = \Hash::make($pass);

	}

	protected $dates = ['deleted_at'];

}
