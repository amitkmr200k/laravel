<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
     public $timestamps = false;

     public function setPasswordAttribute($pass){

		$this->attributes['password'] = \Hash::make($pass);

	}

}
