<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karya_tulis extends Model
{
     protected $fillable = ['nip','nama_pembimbing_karya','jk','alamat_pembimbing','nope','tempat_lahir','tgl_lahir'];
}
