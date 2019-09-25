<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelajaran extends Model
{
    //
	protected $table = 'siswas';
	
	protected $fillable = ['idtempkelas','kodepelajaran','namapelajaran','created_at','updated_at'];
	
	public function pelajarans()
	{
		return $this->hasManyThrough('App\kelas','idtempkelas');
	}
	
	public function tempmateris()
	{
		return $this->belongsTo('App\tempmateri','idtemppelajaran');
	}
}
