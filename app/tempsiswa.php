<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tempsiswa extends Model
{
    //
	protected $table = 'tempsiswas';
	
	public function siswas()
	{
		return $this->hasOne('App\siswa','idtempsiswa');
	}
	
	public function akunusers()
	{
		return $this->hasMany('App\akunuser','idtempusers');
	}
}
