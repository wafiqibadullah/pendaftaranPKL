<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\karya_tulis;

class KaryaTulisController extends Controller
{
  
     public function index(Request $request)
    {
    	$a = karya_tulis::all();

    	     $posts = karya_tulis::when($request->search, function($query) use ($request)
        {

           $query->where('nama_pembimbing_karya','like',"%{$request->search}%");
        })->paginate(2);
        $posts->appends($request->only('search'));

    	return view ('admin.bacadatakaryatulis',compact('pembimbings','a','posts'));
    }




 		public function destroyed(Karya_tulis $siswa)
 	{
 		$siswa->delete();

 		return redirect('/admin/bacadatakaryatulis');
 	}

 	public function edit(karya_tulis $siswa)

 	{
 		
 		$siswas = karya_tulis::all();

 		return view('admin.editkaryatulis',compact('siswa'));
 	}   


	public function update(karya_tulis $pembimbing)
 	{
 		$pembimbing->update([
 			'nip' => request('nip'),
 			'nama_pembimbing_karya' => request('nama_pembimbing_karya'),
 			'jk' => request('jk'),	
 			'alamat_pembimbing' => request('alamat_pembimbing'),
 			'nope' => request('nope'),
 			'tempat_lahir' => request('tempat_lahir'),
 			'tgl_lahir' => request('tgl_lahir')
 			
 		]);
 		return redirect('/admin/bacadatakaryatulis');

 	}

 	

 	public function create()
 	{
 		
 		return view('admin.createkaryatulis');
 	} 
 	public function store()
 	{
 		karya_tulis::create([
 			'nip' => request('nip'),
 			'nama_pembimbing_karya' => request('nama_pembimbing_karya'),
 			'jk' => request('jk'),	
 			'alamat_pembimbing' => request('alamat_pembimbing'),
 			'nope' => request('nope'),
 			'tempat_lahir' => request('tempat_lahir'),
 			'tgl_lahir' => request('tgl_lahir')
 			
 		]);
 		return redirect('/admin/bacadatakaryatulis');

 	}  

}
