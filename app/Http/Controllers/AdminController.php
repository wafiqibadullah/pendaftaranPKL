<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Pendaftaran;
use App\siswa;
use App\kelas;
use App\calon_pkl;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Response;


class AdminController extends Controller
{
    public function index()
    {
    	return view ('admin.index');
    }

    public function header()
    {
    	return view('admin.index');
    }


 	public function index_calon()
 	{
 		
 		$calon = DB::table('pendaftarans')->join('siswas','pendaftarans.siswa_id','=','siswas.id')->join('kelas','pendaftarans.kelas_id','=','kelas.id')->join('calon_pkls','pendaftarans.id','=','calon_pkls.daftar_id')->paginate(5);
 		$a = calon_pkl::all();
 		return view('admin.calon_pkl',compact('calon','a'));
 	}

 	public function confirm($id)
 	{
 		$pkl = calon_pkl::where('calon_id',$id);

 		$pkl->update([
 			'status' => 'terkonfirmasi'
 		]);

 	
 		return redirect('/admin/calon');
 	}

 	public function index_kelas()
 	{
 		$kelas = kelas::all();

 		return view('admin.datakelas',compact('kelas'));
 	}



 	public function create_kelas()
 	{
 		
 		return view('admin.createkelas');
 	} 
 	public function store_kelas()
 	{
 		kelas::create([
 				'nama_kelas' => request('nama_kelas')
 			
 			
 		]);
 		return redirect('/admin/kelas');

 	} 


    	public function destroy(Kelas $siswa)
 	{
 		$kelas = kelas::all();
 		$siswa->delete();

 		return redirect('/admin/kelas');
 	}

 	public function getDownload($file_name)
 	{

 		$foto = "./images/".$file_name;
 		return Response::download($foto);

 	}
}
