<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    //
	protected $table = 'kelas';
	
	protected $fillable = ['namakelas','idtempsiswa','idtempguru','kodekonfirmasi','statuslistanak','statuslistwalikelas','created_at','updated_at'];
	
	public function kelas()
	{
		return $this->hasMany('App\guru','idtempguru');
	}
	
	public function pelajarans()
	{
		return $this->belongsToMany('App\kelas', 'idtempkelas');
	}
}
