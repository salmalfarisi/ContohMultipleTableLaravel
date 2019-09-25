<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tugas extends Model
{
    //
	protected $table = 'tugas';
	
	protected $fillable = ['namatugas','deskripsitugas','deadline','filetugas','targetkelas','jawabansiswa','created_at','updated_at'];
	
	public function tugas()
	{
		return $this->belongsTo('App\temptugas','idtemptugas');
	}
}
