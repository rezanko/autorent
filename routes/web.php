<?php


Route::get('/', 'PagesController@beranda');

//Berita
Route::get('/berita', 'PagesController@listBerita');
Route::get('/berita/{berita}', 'PagesController@berita');

//Buku Tamu
Route::get('/tamu', 'PagesController@bukuTamu');
Route::post('/tamu/add','TamuController@addEntry');

//Type & Mobil
Route::get('/types', 'PagesController@listType');
Route::get('/types/{type}', 'MobilController@listMobil');
Route::get('/types/{type}/jadwal-sewa/{mobil}','MobilController@jadwalSewa');

//Sewa
Route::get('/sewa/{mobil}','SewaController@sewaMobil');
Route::post('/sewa/save','SewaController@saveSewa');

//Ubah Data diri
Route::get('/data_diri', 'UserController@dataDiri');
Route::post('/data_diri/update','UserController@update');

//shopping cart
Route::get('/cart','CartController@showCart');
Route::post('/cart/add','CartController@addToCart');
Route::get('/cart/{cart}/del','CartController@delCart');
Route::get('/cart/checkout','CartController@checkout');

//Order
Route::get('/orders','OrderController@showOrders');
Route::get('/orders/{order}','OrderController@detilOrder');
Route::get('/orders/{order}/bayar','OrderController@showBayarForm');
Route::post('/orders/bayar','OrderController@buktiBayar');
Route::get('/orders/{order}/invoice','OrderController@makeInvoice');


//Halaman Admin
Route::get('/admin','AdminController@adminPage');

Route::get('/admin/listuser','AdminController@userList');
Route::get('/admin/listuser/del/{user}','AdminController@userDel');

Route::get('/admin/bukutamu','AdminController@bukuTamu');

Route::get('/admin/berita','AdminController@manageBerita');
Route::get('/admin/berita/add','BeritaController@addBerita');
Route::post('/admin/berita/add/save','BeritaController@saveAddBerita');
Route::get('/admin/berita/edit/{berita}','BeritaController@editBerita');
Route::post('/admin/berita/edit/{berita}/save','BeritaController@saveEditBerita');
Route::get('/admin/berita/del/{berita}','BeritaController@delBerita');

Route::get('/admin/types','AdminController@manageTypes');
Route::get('/admin/types/add','TypeController@addType');
Route::post('/admin/types/add/save','TypeController@saveAddType');
Route::get('/admin/types/edit/{type}','TypeController@editType');
Route::post('/admin/types/edit/{type}/save','TypeController@saveEditType');
Route::get('/admin/types/del/{type}','TypeController@delType');

Route::get('/admin/mobil','AdminController@manageMobil');
Route::get('/admin/mobil/add','MobilController@addMobil');
Route::post('/admin/mobil/add/save','MobilController@saveAddMobil');
Route::get('/admin/mobil/edit/{mobil}','MobilController@editMobil');
Route::post('/admin/mobil/edit/{mobil}/save','MobilController@saveEditMobil');
Route::get('/admin/mobil/del/{mobil}','MobilController@delMobil');

Route::get('/admin/orders','OrderController@showOrdersAdmin');
Route::get('/admin/orders/cek-bayar/{order}','OrderController@cekBayar');
Route::post('/admin/orders/cek-bayar/confirm','OrderController@confirmBayar');
Route::post('/admin/orders/cek-bayar/invalidate','OrderController@invalidBayar');


Auth::routes();



