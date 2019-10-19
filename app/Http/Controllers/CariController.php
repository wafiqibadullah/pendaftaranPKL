<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CariControlller extends Controller
{
    public function siswa()
    {
    	return view ('cari.cari_siswa');
    }

     public function pembimbing_pkl()
    {
    	return view ('cari.cari_pembimbing_pkl');
    }

     public function pembimbing_karyatulis()
    {
    	return view ('cari.cari_pembimbing_karyatulis');
    }
}
