<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akunuser extends Model
{
    //
	protected $table = 'akunusers';
	
	protected $fillable = ['jenisakun','username','password','email','nomortelepon','namadepan','jeniskelamin','namabelakang','fotoprofile','alamatrumah','agama','created_at','updated_at'];
	
	public function tempsiswas()
	{
		return $this->belongsTo('App\tempsiswa','idtempusers');
	}
	
	public function tempgurus()
	{
		return $this->belongsTo('App\tempguru','idtempusers');
	}
}
