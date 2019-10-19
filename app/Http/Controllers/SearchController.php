<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Pembimbing;
use App\karya_tulis;

class SearchController extends Controller
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


    public function search_siswa(Request $request)
    {
    	$q = $request->input('search');
    	// $a = $request->input('pilihan');

    	$posts = Siswa::where('nama_siswa','LIKE','%' .$q .'%')->get();

    	return view ('cari.result',['posts' => $posts]);

    }

     public function search_pembimbingpkl(Request $request)
    {
    	// $q = $request->input('search');
    	// // $a = $request->input('pilihan');

    	// $posts = Pembimbing::where('nama_pembimbing','LIKE','%' .$q .'%')->paginate(2);

     //    $posts->appends($request->only('search'));

        $posts = pembimbing::when($request->search, function($query) use ($request)
        {

            $query->where('nama_pembimbing','like',"%{$request->search}%");
        })->paginate();
        $posts->appends($request->only('search'));

    	return view ('cari.result_pembimbing_pkl',compact('posts'));

    }

      public function search_pembimbing_karyatulis(Request $request)
    {
        $q = $request->input('search');
        // $a = $request->input('pilihan');

        $posts = karya_tulis::where('nama_pembimbing','LIKE','%' .$q .'%')->get();

        return view ('cari.result_pembimbing_karya_tulis',['posts' => $posts]);

    }
}
