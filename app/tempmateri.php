<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tempmateri extends Model
{
    //
	protected $table = 'tempmateri';
	
	public function tempmateris()
	{
		return $this->hasMany('App\pelajaran','idtemppelajaran');
	}
	
	public function materis()
	{
		return $this->hasMany('App\materi','idtempmateri');
	}
}
