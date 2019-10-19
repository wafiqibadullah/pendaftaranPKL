<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;


class SiswaController extends Controller
{
    public function index(Request $request)
    {
    	
    	
    	 $a = siswa::get();
    
         $posts = Siswa::when($request->search, function($query) use ($request)
        {

        $query->where('nama_siswa','like',"%{$request->search}%");
        })->paginate(10);
        $posts->appends($request->only('search'));


    	return view ('admin.bacadatasiswa',compact('siswas','a','posts'));
    }

   

 	    	public function destroy(Siswa $siswa)
 	{
 		$siswa->delete();

 		return redirect('/admin/bacadatasiswa');
 	}


 	public function edit(Siswa $siswa)

 	{
 		
 		$siswas = siswa::all();

 		return view('admin.editsiswa',compact('siswa'));
 	} 


	public function destroyed(Siswa $siswa)
 	{
 		$siswa->delete();

 		return redirect('/admin/bacadatasiswa');
 	}




 	public function update(Siswa $siswa)
 	{
 		 $validator = \Validator::make($request->all(),
            [
           
                'nope' => 'required|integer',
     
            ]);

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
 		


 		return view('admin.createsiswa');
 	} 
 	public function store()
 	{
 		
 		Siswa::create([
 			'nis' => request('nis'),
 			'password' => request('password'),
 			'nama_siswa' => request('nama_siswa'),
 			'jk' => request('jk'),	
 			'tempat_lahir' => request('tempat_lahir'),
 			'tgl_lahir' => request('tgl_lahir'),
 			'alamat' => request('alamat'),
 			'remember_token' => request('jk'),
 			'nope' => request('nope')
 			
 		]);
 		return redirect('/admin/bacadatasiswa');

 	}  
}

