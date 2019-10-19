<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    protected $fillable = ['id','siswa_id','kelas_id','nama_perusahaan','alamat_perusahaan'];
}
