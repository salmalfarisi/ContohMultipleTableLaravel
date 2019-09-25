<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    //
	protected $table = 'materis';
	
	protected $fillable = ['namamateri','deskripsimateri','filemateri','created_at','updated_at'];
	
	public function materis()
	{
		return $this->belongsTo('App\tempmateri','idtempmateri');
	}
	
	public function temptugas()
	{
		return $this->belongsTo('App\materi','idtempmateri');
	}
}
