<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    //
	protected $table = 'beritas';
	
	protected $fillable = ['judul','kategori','isiberita','fotoberita','publishberita','created_at','updated_at'];
}
