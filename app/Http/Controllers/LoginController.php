<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\admin;
use App\siswa;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function masuk_admin(Request $kiriman){
    	$data1 = admin::where('ussername',$kiriman->username)
                        ->where('password',$kiriman->password)->get();

    	if (count($data1)>0) {

    		Auth::guard('admin')->LoginUsingId($data1[0]['id']);
    		return redirect('/admin/index');
    		
    	}else{

    		return 'gagal login';
    	}

    }

    function masuk_siswa(Request $kiriman){
        $data2 = siswa::where('nis',$kiriman->nis)
                        ->where('password',$kiriman->password)->get();

        if (count($data2)>0) {

            Auth::guard('siswa')->LoginUsingId($data2[0]['id']);
            return redirect('/siswa/index');

        }else {
            return 'gagal login';
        }


    }

    function keluar_admin(){

    	if (Auth::guard('admin')->check()) {
    		Auth::guard('admin')->logout();	
    	}
    	return redirect('/pertamax');
    }

    function keluar_siswa(){
        if (Auth::guard('siswa')->check()) {
            Auth::guard('siswa')->logout();
        }
        return redirect('/pertamax');

    }
 		   
 }
