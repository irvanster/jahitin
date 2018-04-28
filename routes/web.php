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

Route::get('/','IndexController@landing')->name('landing');

//Auth
Route::group(['middleware' => 'guest'], function()
{
    Route::get('/login/cms-panel','AdmininstratorController@login')->name('login');
    Route::post('/login/cms-panel','AdmininstratorController@storeLogin')->name('b.store.login');
});
Route::post('/cms-panel/store-register','AdmininstratorController@storeRegister')
->name('b.store.register')->middleware('auth');
Route::get('/cms-panel/logout','AdmininstratorController@logout')->name('b.logout');
//endAuth

Route::group(['prefix' => 'cms-panel'], function()
{
    Route::group(['middleware' => 'auth'], function()
    {
        Route::get('/','BackController@dashboard')->name('b.dashboard');

        Route::group(['prefix' => 'managemen-user'], function()
        {
            Route::get('/administrator','AdmininstratorController@index')->name('b.administrator');
            Route::get('/administrator/getData','AdmininstratorController@get_administrator')
            ->name('datatables.getAdministrator');

            Route::group(['prefix' => 'penjahit'], function()
            {
                Route::get('/','PenjahitController@index')->name('b.penjahit');
                Route::post('/','PenjahitController@storePenjahit')->name('b.store.penjahit');
                Route::post('/update/{id_penjahit}','PenjahitController@updatePenjahit')->name('b.update.penjahit');
                Route::post('/konfirmasi/{id_penjahit}','PenjahitController@konfirmasi')->name('b.konfirmasi.penjahit');
                Route::get('/pesanan','PenjahitController@pesanPenjahit')->name('b.penjahit.pesan');
    
            });
            Route::group(['prefix' => 'desainer'], function()
            {
                Route::get('/','DesainerController@index')->name('b.desainer');
                Route::post('/','DesainerController@storeDesainer')->name('b.store.desainer');
                Route::post('/update/{id_desainer}','DesainerController@updateDesainer')->name('b.update.desainer');
                Route::post('/konfirmasi/{id_desainer}','DesainerController@konfirmasi')->name('b.konfirmasi.desainer');
                Route::get('/pesanan','DesainerController@pesanDesainer')->name('b.desainer.pesan');
    
            });
        });

        Route::group(['prefix' => 'pesanan-jahitan'], function()
        {
            Route::get('/','PesananJahitanController@index')->name('b.pesananJahitan.index');
            Route::get('/terkonfirmasi','PesananJahitanController@terkonfirmasi')->name('b.pesananJahitan.terkonfirmasi');
            Route::post('/konfirmasi-pembayaran/{id_jahit}','PesananJahitanController@KonfirmasiBayar')->name('b.pesananJahitan.konfirmasiBayar');
            Route::post('/batalkan-pemesanan/{id_jahit}','PesananJahitanController@batalkan')->name('b.pesananJahitan.batalkan');
            Route::get('/dibatalkan','PesananJahitanController@dibatalkan')->name('b.pesananJahitan.dibatalkan');
            Route::post('/hapus/{id_jahit}','PesananJahitanController@hapus')->name('b.pesananJahitan.hapus');
            
            //Route::get('/getData','PesananJahitanController@get_jahitan')
            //->name('datatables.getJahit');
        });
        Route::group(['prefix' => 'proses-penjahitan'], function()
        {
            Route::get('/pengukuran','PesananJahitanController@pengukuran')->name('b.pesananJahitan.pengukuran');
            Route::post('/pengukuran','PesananJahitanController@storePengukuran')->name('b.pesananJahitan.store.pengukuran');
            Route::get('/posts','PesananJahitanController@postsJahitan')->name('b.pesananJahitan.postsJahitan');
            Route::get('/diproses','PesananJahitanController@diproses')->name('b.pesananJahitan.diproses');

        });

    });

});