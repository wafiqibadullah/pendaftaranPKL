<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Pendaftaran;
use App\Siswa;
use App\Kelas;
use App\calon_pkl;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class DaftarController extends Controller
{
 	

 	public function create()
 	{
 		$categories = siswa::all();
 		$kelas = kelas::all();

 		return view('siswa.pendaftaran',compact('categories','kelas'));
 	}   



 	public function index_calon_pkl()
 	{
        

 		$user = pendaftaran::where("siswa_id", \Auth::user()->id)->first();
 
 		$b = calon_pkl::where('daftar_id',$user['id'])->get(); 
 		$a = DB::table('pendaftarans')
                ->join('siswas','pendaftarans.siswa_id','=','siswas.id')
                ->join('kelas','pendaftarans.kelas_id','=','kelas.id')
 				->where('siswa_id', \Auth::user()->id)
 				->get();


 		return view('siswa.calon_pkl',compact('a','b','c'));
 	
 	}


 	 public function create_foto()
    {
 	
    	
 		$a = pendaftaran::where('siswa_id', \Auth::user()->id)->get();
        $category = calon_pkl::get();

        return view('siswa.lampir_foto', compact('category','a'));
    }

 	 public function update_foto(Request $request)
    {

    	$siswa_id = request('daftar_id');
 		
 		$cek = calon_pkl::where('daftar_id',$siswa_id)
 						  ->first();

 		if ($cek) {

 				return redirect('siswa/lampir_foto')->with(['error' => 'Maaf , Kamu sudah Melampirkan']);
		 			
 		  }	


        $validator = \Validator::make($request->all(),
        [
        	'daftar_id' => 'required',
            'foto' => 'required|image|max:1000|mines:jpg,jpeg,png',
            
        ]);

        $user = \App\pendaftaran::where('siswa_id', \Auth::user()->id)->first();

        $image = $request->foto;
        $name_image = $image->getClientOriginalName();
        $image->move(public_path().'/images', $name_image);

        $category = new \App\calon_pkl;

        $category->daftar_id = $request->daftar_id;
        $category->foto = $name_image;
        $category->status = 'calon';
        

        $category->save();



        return \Redirect::to('siswa/lampir_foto')->with(['success' => 'Berhasil Melampirkan  ']);
    }




 	// public function edit(Post $post)

 	// {
 	// 	$categories = category::all();


 	// 	return view('post.edit',compact('post','categories'));
 	// }   



 	// public function update(Post $post)
 	// {
 	// 	$post->update([
 	// 		'title' => request('title'),
 	// 		'category_id' => request('category_id'),
 	// 		'content' => request('content')
 			
 	// 	]);
 	// 	return redirect('/post');

 	// }



 	public function store(Request $request)
 	{

 		$siswa_id = request('siswa_id');
 		
 		$cek = pendaftaran::where('siswa_id',$siswa_id)
 						  ->first();

 		if ($cek) {

 				return redirect('/siswa/calon_pkl')->with(['error' => 'Kamu sudah Mendaftar , Silahkan Melampirkan Surat Bukti']);
		 			
 		  }				  


 		Pendaftaran::create([
 			'siswa_id' => request('siswa_id'),
 			'kelas_id' => request('kelas_id'),
 			'nama_perusahaan' => request('nama_perusahaan'),
 			'alamat_perusahaan' => request('alamat_perusahaan')

 		]);
 		return redirect('/siswa/calon_pkl')->with(['success' => 'Daftar Berhasil , Silahkan Melampirkan  Surat Bukti']);

 	}

 	// public function destroy(Post $post)
 	// {
 	// 	$post->delete();

 	// 	return redirect('/post');
 	// }

}
