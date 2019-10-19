<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $fillable = ['id','nis','password','nama_siswa','jk','alamat','tempat_lahir','tgl_lahir','nope','remember_token'];

     protected $table = 'siswas';
}
