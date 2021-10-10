<?php
use Illuminate\Support\Facades\Hash;
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



/** Default Route */
Route::get('/','UserController@index');
Route::get('/voting/login','UserController@votinglogin')->name('votinglogin');
Route::get('/voting/setPassword','UserController@setPasswordPage')->name('voting.setPasswordPage');
Route::post('/voting/setPassword','UserController@setPassword')->name('voting.setPassword');
/** Admin Route */
Route::get('/admin','DashboardController@index')->name('home');	
Route::post('/admin/postlogin','AuthController@postlogin');
Route::get('/admin/setting','SettingController@index')->name('admin.setting');
Route::post('/admin/setting','SettingController@save')->name('admin.setting.save');

//Route Kandidat
Route::get('/admin/kandidat','KandidatController@index')->name('admin.kandidat');
Route::get('/admin/kandidat/tambah','KandidatController@tambah')->name('admin.kandidat.tambah');
Route::get('/admin/kandidat/detail/{id}','KandidatController@detail')->where('id','[0-9]+')->name('admin.kandidat.detail');
Route::get('/admin/kandidat/edit/{id}','KandidatController@edit')->where('id','[0-9]+')->name('admin.kandidat.edit');
Route::post('/admin/kandidat/update/{id}','KandidatController@update')->where('id','[0-9]+')->name('admin.kandidat.update');
Route::get('/admin/kandidat/hapus/{id}','KandidatController@hapus')->where('id','[0-9]+')->name('admin.kandidat.hapus');
Route::post('/admin/kandidat/store','KandidatController@store')->name('admin.kandidat.store');
//Route Voters

Route::get('/admin/voters','VotersController@index')->name('admin.voters');
Route::get('/admin/voters/tambah','VotersController@tambah')->name('admin.voters.tambah');
Route::post('/admin/voters/store','VotersController@store')->name('admin.voters.store');
Route::get('/admin/voters/hapus','VotersController@hapus')->name('admin.voters.hapus');
Route::post('/admin/voters/delete','VotersController@delete')->name('admin.voters.delete');
Route::get('/admin/voters/export_excel','VotersController@export_excel')->name('admin.voters.export_excel');

// Route Voting
Route::middleware(['TimeVote'])->group(function(){
    Route::get('/voting','VotingController@index')->name('votingHome');
    Route::post('/cektoken','UserController@cektoken')->name('cektoken');
    Route::get('/cekStatus','VotingController@cekStatus')->name('cekStatus');
    Route::get('/simpansuara/{id}','VotingController@simpansuara')->where('id','[0-9]+')->middleware(['apis'])->name('simpansuara');
    Route::get('/logoutvoting','VotingController@logoutvoting')->name('logoutvotingOsis');
});


//Route Api

Route::middleware(['apis'])->group( function () {
    Route::get('/api/getInfo','DashboardController@ApiDashboard');  // Api untuk info dashboard

    Route::get('/api/getChart','DashboardController@getChart');  // Api untuk chart Dashboard

    

});



Auth::routes();
