<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
	protected $table = 'siswas';
	
	protected $fillable = ['nis','emailortu','nomorortu','pekerjaanibu','pekerjaanbapak','penghasilanbapak','penghasilanibu','agamabapak','agamaibu','namabapak','namaibu','created_at','updated_at'];
	
	public function tempsiswas()
	{
		return $this->hasOne('App\tempsiswa','idtempsiswa');
	}
	
	public function kelas()
	{
		return $this->belongsTo('App\kelas','idtempsiswa');
	}
}
