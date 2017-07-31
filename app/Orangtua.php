<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orangtua extends Model
{
    //
    protected $table ='orangtuas';
    protected $fillable = ['nama_ibu', 'nama_ayah', 'umur_ibu', 'umur_ayah', 'alamat'];
    protected $visible = ['nama_ibu', 'nama_ayah', 'umur_ibu', 'umur_ayah', 'alamat'
    	];
    	public $timestamps = true ;

    	public function siswa()
    	{
    		return $this->hasMany('App\Siswa', 'orangtua_id');
    	}

}
