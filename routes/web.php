<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/pertamax');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/login_admin', function () {
    return view('login_admin');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login_admin', 'LoginController@login_admin')->name('login_admin');
Route::get('/admin/index', 'AdminController@index')->name('admin.index')->middleware('auth:admin');
Route::get('/admin/header', 'AdminController@header')->name('header');
Route::get('/admin/bacadatasiswa', 'SiswaController@index')->name('admin.bacadatasiswa')->middleware('auth:admin');
Route::delete('/admin/{siswa}/delete', 'SiswaController@destroy')->name('siswa.delete')->middleware('auth:admin');
Route::get('/admin/{siswa}/editsiswa', 'SiswaController@edit')->name('siswa.editsiswa')->middleware('auth:admin');
Route::patch('/admin/{siswa}/update', 'SiswaController@update')->name('siswa.update')->middleware('auth:admin');
Route::get('/admin/createsiswa', 'SiswaController@create')->name('admin.create')->middleware('auth:admin');
Route::post('/admin/createsiswa', 'SiswaController@store')->name('admin.store')->middleware('auth:admin');


Route::delete('/admin/{siswa}/deletee', 'PembimbingController@destroy')->name('pembimbing.destroy');

Route::delete('/admin/{siswa}/delete', 'PembimbingController@destroyed')->name('pembimbing.destroyed');

Route::get('/admin/bacadatapembimbinggg', 'PembimbingController@index')->name('admin.bacadatapembimbinggg');
Route::get('/admin/{siswa}/editpembimbings', 'PembimbingController@edit')->name('pembimbing.editpembimbing');
Route::patch('/admin/{pembimbing}/updateed', 'PembimbingController@update')->name('pembimbing.updatedd');
Route::patch('/admin/{siswa}/update', 'PembimbingController@updated')->name('pembimbing.updated');
Route::get('/admin/createpembimbing', 'PembimbingController@create')->name('admin.createpembimbing');
Route::post('/admin/createpembimbing', 'PembimbingController@store')->name('pembimbing.storepembimbing');





Route::get('/admin/calon', 'AdminController@index_calon')->name('admin.calon')->middleware('auth:admin');
Route::get('/admin/kelas', 'AdminController@index_kelas')->name('admin.kelas')->middleware('auth:admin');
Route::get('/admin/create_kelas', 'AdminController@create_kelas')->name('admin.create_kelas');
Route::post('/admin/act_create', 'AdminController@store_kelas')->name('admin.store_kelas');
Route::delete('/admin/{siswa}/delete_kelas', 'AdminController@destroy')->name('admin.destroy_kelas')->middleware('auth:admin');
Route::patch('/admin/{calon_id}/confirm', 'AdminController@confirm')->name('admin.calon_confirm')->middleware('auth:admin');

// karyatulis
Route::get('/admin/bacadatakaryatulis', 'KaryaTulisController@index')->name('admin.bacadatakaryatulis');
Route::get('/admin/{siswa}/editkaryatulis', 'KaryaTulisController@edit')->name('admin.editkaryatulis');
Route::patch('/admin/{pembimbing}/updateedd', 'KaryaTulisController@update')->name('admin.updated');
Route::delete('/admin/{siswa}/deleted', 'KaryaTulisController@destroyed')->name('admin.destroyedd');
Route::get('/admin/createkaryatulis', 'KaryaTulisController@create')->name('admin.createkaryatulis');
Route::post('/admin/createkaryatuliss', 'KaryaTulisController@store')->name('admin.storekaryatulis');



// Pembagian Pembinbing dan karya tulis PKL

//RPL 1
Route::get('/admin/SiswaPKL/RPL1', 'PembagianPembimbingController@index_RPL1')->name('admin.pkl_RPL1');
Route::get('/admin/SiswaPKL/RPL1/create', 'PembagianPembimbingController@create_RPL1');
Route::post('/admin/SiswaPKL/RPL1/store', 'PembagianPembimbingController@store_RPL1');

//RPL 2
Route::get('/admin/SiswaPKL/RPL2', 'PembagianPembimbingController@index_RPL2')->name('admin.pkl_RPL2');
Route::get('/admin/SiswaPKL/RPL2/create', 'PembagianPembimbingController@create_RPL2');
Route::post('/admin/SiswaPKL/RPL2/store', 'PembagianPembimbingController@store_RPL2');

//TKJ 1
Route::get('/admin/SiswaPKL/TKJ1', 'PembagianPembimbingController@index_TKJ1')->name('admin.pkl_TKJ1');
Route::get('/admin/SiswaPKL/TKJ1/create', 'PembagianPembimbingController@create_TKJ1');
Route::post('/admin/SiswaPKL/TKJ1/store', 'PembagianPembimbingController@store_TKJ11');

//TKJ 2
Route::get('/admin/SiswaPKL/TKJ2', 'PembagianPembimbingController@index_TKJ2')->name('admin.pkl_TKJ2');
Route::get('/admin/SiswaPKL/TKJ2/create', 'PembagianPembimbingController@create_TKJ2');
Route::post('/admin/SiswaPKL/TKJ2/store', 'PembagianPembimbingController@store_TKJ2');


// Login

Route::get('/pengurus', function () {
    return view('pengurus');
})->middleware('auth:pengurus');

Route::get('/pengguna', function () {
    return view('pengguna');
})->middleware('auth:pengguna');

Route::get('/login_admin', function () {
    return view('login_admin');
})->middleware('guest');

Route::get('/login_member', function () {
    return view('login_member');
})->middleware('guest');

Route::get('/pertamax', function () {
    return view('pertamax');
})->middleware('guest');

Route::post('/kirimdata1','LoginController@masuk_admin');
Route::post('/kirimdata2','LoginController@masuk_siswa');
Route::get('/keluar1','LoginController@keluar_admin' );
Route::get('/keluar2','LoginController@keluar_siswa' );




// Siswa
Route::get('/siswa/index', function () {
    return view('siswa/index');
})->middleware('auth:siswa');
Route::get('/indexx', function () {
    return view('admin/index');
})->middleware('auth:admin');

Route::get('/siswa/calon_pkl', function () {
    return view('siswa/calon_pkl');
})->middleware('auth:siswa');

Route::get('/siswa/daftar', 'DaftarController@create')->name('siswa.daftar')->middleware('auth:siswa');
Route::post('/siswa/created', 'DaftarController@store')->name('daftar.store');
Route::get('/siswa/cek', 'DaftarController@store')->middleware('auth:admin');
Route::get('/siswa/calon_pkl', 'DaftarController@index_calon_pkl')->middleware('auth:siswa');
Route::get('/siswa/lampir_foto', 'DaftarController@create_foto')->middleware('auth:siswa');
Route::post('/siswa/lampirkan', 'DaftarController@update_foto')->name('siswa.foto')->middleware('auth:siswa');





// Download

Route::get('/download/{siswa}', 'AdminController@getDownload')->name('download');


