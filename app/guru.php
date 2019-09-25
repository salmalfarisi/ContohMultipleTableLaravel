<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    //
	protected $table = 'gurus';
	
	protected $fillable = ['nip','kodeguru','bidangpelajaran','created_at','updated_at'];
	
	public function tempgurus()
	{
		return $this->hasOne('App\tempguru','idtempguru');
	}
	
	public function kelas()
	{
		return $this->hasOne('App\kelas','idtempguru');
	}
}
