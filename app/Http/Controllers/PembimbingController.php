<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembimbing;
use App\Siswa;


class PembimbingController extends Controller
{
     public function index(Request $request)
    {
    	$a = pembimbing::all();
    	
    

    	  $posts = pembimbing::when($request->search, function($query) use ($request)
        {

            $query->where('nama_pembimbing','like',"%{$request->search}%");
        })->paginate(2);
        $posts->appends($request->only('search'));

    	return view ('admin.bacadatapembimbinggg',compact('pembimbings','a','posts'));
    }


    	public function destroy(Siswa $siswa)
 	{
 		$siswa->delete();

 		return redirect('/admin/bacadatasiswa');
 	}


 		public function destroyed(Pembimbing $siswa)
 	{
 		$siswa->delete();

 		return redirect('/admin/bacadatapembimbinggg');
 	}

 	public function edit(Pembimbing $siswa)

 	{
 		
 		$siswas = pembimbing::all();

 		return view('admin.editpembimbings',compact('siswa'));
 	}   


	public function update(Pembimbing $pembimbing)
 	{
 		$pembimbing->update([
 			'nip' => request('nip'),
 			'nama_pembimbing' => request('nama_pembimbing'),
 			'jk' => request('jk'),	
 			'alamat_pembimbing' => request('alamat_pembimbing'),
 			'nope' => request('nope'),
 			'tempat_lahir' => request('tempat_lahir'),
 			'tgl_lahir' => request('tgl_lahir')
 			
 		]);

 		// Alert::success('Success ', 'Data telah Di ubah');
 		return redirect('/admin/bacadatapembimbinggg');

 	}

 	public function updated(Siswa $siswa)
 	{
 		$siswa->update([
 			'nis' => request('nis'),
 			'password' => request('password'),
 			'nama_siswa' => request('nama_siswa'),
 			'jk' => request('jk'),	
 			'tempat_lahir' => request('tempat_lahir'),
 			'tgl_lahir' => request('tgl_lahir'),
 			'alamat' => request('alamat'),
 			'nope' => request('nope')
 			
 		]);
 		return redirect('/admin/bacadatasiswa');

 	}

 	public function create()
 	{
 		
 		return view('admin.createpembimbing');
 	} 
 	public function store()
 	{
 		Pembimbing::create([
 			'nip' => request('nip'),
 			'nama_pembimbing' => request('nama_pembimbing'),
 			'jk' => request('jk'),	
 			'alamat_pembimbing' => request('alamat_pembimbing'),
 			'nope' => request('nope'),
 			'tempat_lahir' => request('tempat_lahir'),
 			'tgl_lahir' => request('tgl_lahir')
 			
 		]);
 		return redirect('/admin/bacadatapembimbinggg');

 	}  
}
