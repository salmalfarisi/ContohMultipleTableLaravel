<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class temptugas extends Model
{
    //
	protected $table = 'temptugas';
	
	public function temptugas()
	{
		return $this->hasMany('App\materi','idtempmateri');
	}
	
	public function tugas()
	{
		return $this->hasMany('App\tugas','idtemptugas');
	}
}
