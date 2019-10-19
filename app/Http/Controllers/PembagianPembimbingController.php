<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;
use App\siswa;
use App\kelas;
use App\calon_pkl;
use App\Pembimbing;
use App\karya_tulis;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\siswa_pkl;
use Illuminate\Support\Facades\DB;



class PembagianPembimbingController extends Controller
{
    public function index_RPL1 ()
    {
    	$as = 'XI RPL 1';
    	$posts = DB::table('siswa_pkls')
    		->join('pembimbings','siswa_pkls.pembimbing_id','=','pembimbings.id')
    		->join('karya_tulis','siswa_pkls.tulis_id','=','karya_tulis.id')
    		->join('calon_pkls','siswa_pkls.calon_id','=','calon_pkls.calon_id')
    		->join('pendaftarans','calon_pkls.daftar_id','=','pendaftarans.id')
    		->join('kelas','pendaftarans.kelas_id','=','kelas.id')
    		->join('siswas','pendaftarans.siswa_id','=','siswas.id')
            ->where('kelas.nama_kelas',$as)	
 			->paginate(5);

    	return view('admin.siswapkl_rpl1',compact('posts'));
    }

    public function create_RPL1()
    {
    	$pembimbing = Pembimbing::all();
    	$karya_tulis = karya_tulis::all();
    	$confir = 'terkonfirmasi';
    	$calon = calon_pkl::where('status',$confir)->get();
    	$as = 'XI RPL 1';


    	$a = DB::table('calon_pkls')->join('pendaftarans','calon_pkls.daftar_id','=','pendaftarans.id')->join('kelas','pendaftarans.kelas_id','=','kelas.id')
    			->join('siswas','pendaftarans.siswa_id','=','siswas.id')
 				->where('status',$confir)
 				->where('kelas.nama_kelas',$as)
 				->get();

    	return view('admin.create_RPL1',compact('pembimbing','karya_tulis','calon','a'));

    }


   public function store_RPL1(Request $request)
 	{

 		$calon_pkl = request('calon_id');
 		
 		$cek = siswa_pkl::where('calon_id',$calon_pkl)
 						  ->first();

 		if ($cek) {

 				return redirect('/admin/SiswaPKL/RPL1')->with(['error' => 'Maaf , Siswa Ini Sudah di data']);
		 			
 		  }				  


 		siswa_pkl::create([
 			'calon_id' => request('calon_id'),
 			'tulis_id' => request('tulis_id'),
 			'pembimbing_id' => request('pembimbing_id'),

 		]);
 		return redirect('/admin/SiswaPKL/RPL1')->with(['success' => 'Berhasil di Data']);

 	}


    // RPL 2
    
    public function index_RPL2 ()
    {
        $as = 'XI RPL 2';
        $posts = DB::table('siswa_pkls')
            ->join('pembimbings','siswa_pkls.pembimbing_id','=','pembimbings.id')
            ->join('karya_tulis','siswa_pkls.tulis_id','=','karya_tulis.id')
            ->join('calon_pkls','siswa_pkls.calon_id','=','calon_pkls.calon_id')
            ->join('pendaftarans','calon_pkls.daftar_id','=','pendaftarans.id')
            ->join('kelas','pendaftarans.kelas_id','=','kelas.id')
            ->join('siswas','pendaftarans.siswa_id','=','siswas.id') 
            ->where('kelas.nama_kelas',$as)   
            ->paginate(5);

        return view('admin.siswapkl_rpl2',compact('posts'));
    }

    public function create_RPL2()
    {
        $pembimbing = Pembimbing::all();
        $karya_tulis = karya_tulis::all();
        $confir = 'terkonfirmasi';
        $calon = calon_pkl::where('status',$confir)->get();
        $as = 'XI RPL 2';


        $a = DB::table('calon_pkls')->join('pendaftarans','calon_pkls.daftar_id','=','pendaftarans.id')->join('kelas','pendaftarans.kelas_id','=','kelas.id')
                ->join('siswas','pendaftarans.siswa_id','=','siswas.id')
                ->where('status',$confir)
                ->where('kelas.nama_kelas',$as)
                ->get();

        return view('admin.create_RPL2',compact('pembimbing','karya_tulis','calon','a'));

    }


   public function store_RPL2(Request $request)
    {

        $calon_pkl = request('calon_id');
        
        $cek = siswa_pkl::where('calon_id',$calon_pkl)
                          ->first();

        if ($cek) {

                return redirect('/admin/SiswaPKL/RPL2')->with(['error' => 'Maaf , Siswa Ini Sudah di data']);
                    
          }               


        siswa_pkl::create([
            'calon_id' => request('calon_id'),
            'tulis_id' => request('tulis_id'),
            'pembimbing_id' => request('pembimbing_id'),

        ]);
        return redirect('/admin/SiswaPKL/RPL2')->with(['success' => 'Berhasil di Data']);

    }



    // TKJ 1
    
    public function index_TKJ1 ()
    {
        $as = 'XI TKJ 1';
        $posts = DB::table('siswa_pkls')
            ->join('pembimbings','siswa_pkls.pembimbing_id','=','pembimbings.id')
            ->join('karya_tulis','siswa_pkls.tulis_id','=','karya_tulis.id')
            ->join('calon_pkls','siswa_pkls.calon_id','=','calon_pkls.calon_id')
            ->join('pendaftarans','calon_pkls.daftar_id','=','pendaftarans.id')
            ->join('kelas','pendaftarans.kelas_id','=','kelas.id')
            ->join('siswas','pendaftarans.siswa_id','=','siswas.id')    
            ->where('kelas.nama_kelas',$as)
            ->paginate(5);

        return view('admin.siswapkl_tkj1',compact('posts'));
    }

    public function create_TKJ1()
    {
        $pembimbing = Pembimbing::all();
        $karya_tulis = karya_tulis::all();
        $confir = 'terkonfirmasi';
        $calon = calon_pkl::where('status',$confir)->get();
        $as = 'XI TKJ 1';


        $a = DB::table('calon_pkls')->join('pendaftarans','calon_pkls.daftar_id','=','pendaftarans.id')->join('kelas','pendaftarans.kelas_id','=','kelas.id')
                ->join('siswas','pendaftarans.siswa_id','=','siswas.id')
                ->where('status',$confir)
                ->where('kelas.nama_kelas',$as)
                ->get();

        return view('admin.create_TKJ1',compact('pembimbing','karya_tulis','calon','a'));

    }


   public function store_TKJ11(Request $request)
    {

        $calon_pkl = request('calon_id');
        
        $cek = siswa_pkl::where('calon_id',$calon_pkl)
                          ->first();

        if ($cek) {

                return redirect('/admin/SiswaPKL/TKJ1')->with(['error' => 'Maaf , Siswa Ini Sudah di data']);
                    
          }               


        siswa_pkl::create([
            'calon_id' => request('calon_id'),
            'tulis_id' => request('tulis_id'),
            'pembimbing_id' => request('pembimbing_id'),

        ]);
        return redirect('/admin/SiswaPKL/TKJ1')->with(['success' => 'Berhasil di Data']);

    }



    // TKJ 2
    
    public function index_TKJ2 ()
    {
         $as = 'XI TKJ 2';
        $posts = DB::table('siswa_pkls')
            ->join('pembimbings','siswa_pkls.pembimbing_id','=','pembimbings.id')
            ->join('karya_tulis','siswa_pkls.tulis_id','=','karya_tulis.id')
            ->join('calon_pkls','siswa_pkls.calon_id','=','calon_pkls.calon_id')
            ->join('pendaftarans','calon_pkls.daftar_id','=','pendaftarans.id')
            ->join('kelas','pendaftarans.kelas_id','=','kelas.id')
            ->join('siswas','pendaftarans.siswa_id','=','siswas.id')
            ->where('kelas.nama_kelas',$as)    
            ->paginate(5);

        return view('admin.siswapkl_tkj2',compact('posts'));
    }

    public function create_TKJ2()
    {
        $pembimbing = Pembimbing::all();
        $karya_tulis = karya_tulis::all();
        $confir = 'terkonfirmasi';
        $calon = calon_pkl::where('status',$confir)->get();
        $as = 'XI TKJ 2';


        $a = DB::table('calon_pkls')->join('pendaftarans','calon_pkls.daftar_id','=','pendaftarans.id')->join('kelas','pendaftarans.kelas_id','=','kelas.id')
                ->join('siswas','pendaftarans.siswa_id','=','siswas.id')
                ->where('status',$confir)
                ->where('kelas.nama_kelas',$as)
                ->get();

        return view('admin.create_TKJ1',compact('pembimbing','karya_tulis','calon','a'));

    }


   public function store_TKJ1(Request $request)
    {

        $calon_pkl = request('calon_id');
        
        $cek = siswa_pkl::where('calon_id',$calon_pkl)
                          ->first();

        if ($cek) {

                return redirect('/admin/SiswaPKL/TKJ1')->with(['error' => 'Maaf , Siswa Ini Sudah di data']);
                    
          }               


        siswa_pkl::create([
            'calon_id' => request('calon_id'),
            'tulis_id' => request('tulis_id'),
            'pembimbing_id' => request('pembimbing_id'),

        ]);
        return redirect('/admin/SiswaPKL/TKJ1')->with(['success' => 'Berhasil di Data']);

    }


   
}
