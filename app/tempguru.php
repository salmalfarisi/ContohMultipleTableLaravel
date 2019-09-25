<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tempguru extends Model
{
    //
	protected $table = 'tempguru';
	
	public function akunusers()
	{
		return $this->hasMany('App\akunuser','idtempusers');
	}
	
	public function gurus()
	{
		return $this->hasOne('App\guru','idtempguru');
	}
}
