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

Route::get('/', function () {
    return view('layouts.app');
});

Route::prefix('employee')->group(function() {
    Route::get('/login', 'Auth\EmployeeLoginController@showLoginForm')->name('employee.login');
    Route::post('/login', 'Auth\EmployeeLoginController@login')->name('employee.login.submit');
    Route::get('/home', 'EmployeeController@index')->name('employee.home');
});

Route::resource('/backend/pages/employee', 'EmployeeController');
Route::get('/backend/pages/employee/{id}/view', 'EmployeeController@view');
Route::resource('/backend/pages/user', 'UserController');
Route::resource('/backend/pages/anak', 'AnakController');
Route::resource('/backend/pages/imunisasi', 'ImunisasiController');
Route::get('/backend/pages/user/{id}/view', 'UserController@view');
// Route::get('/backend/pages/anak/{id}/create', 'AnakController@tambahAnak');
// Route::post('/backend/pages/user/{id}/view', 'AnakController@createAnak');
Route::get('/backend/pages/anak/{id}/detail_anak', 'AnakController@detailAnak');
// Route::get('/backend/pages/anak/detail_anak','StockController@create');

Route::get('/backend/pages/anak/{id}/viewgrafik','PertumbuhanAnakController@grafik');
Route::post('/backend/pages/anak/{id}/grafik', 'PertumbuhanAnakController@store');
Route::get('/backend/pages/anak/{id}/grafik', 'PertumbuhanAnakController@viewgrafik');
Route::get('/backend/pages/anak/{id}/addpertumbuhan', 'PertumbuhanAnakController@addpertumbuhan');

Route::get('/backend/pages/pertumbuhananak/{id}/edit', 'PertumbuhanAnakController@edit');
Route::get('/backend/pages/imunisasi/create', 'ImunisasiController@create');
Route::resource('/backend/pages/jenis_imunisasi', 'JenisImunisasiController');
Route::resource('/backend/pages/perkembangan', 'PerkembanganAnakController');
Route::resource('/backend/pages/jadwal_imunisasi', 'JadwalimunisasiController');
Route::resource('/backend/pages/info', 'InfoController');

Route::get('/backend/pages/info', 'InfoController@index');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');
Route::get('/backend/pages/konsultasi', 'ChatsController@index');
// Route::get('/profile/{id}', 'UserController@profile')->name('user.profile');
Route::get('/employee/profile/{id}', 'EmployeeController@profile')->name('employee.profile');
Route::get('/backend/pages/imunisasi', 'ImunisasiController@index');
Route::get('/jadwal_imunisasi', 'JadwalimunisasiController@index')->name('jadwal_imunisasi.index');
Route::post('/jadwal_imunisasi', 'JadwalimunisasiController@addEvents')->name('jadwal_imunisasi.add');
Route::get('/backend/pages/jenis_imunisasi', 'JenisImunisasiController@index');
Route::resource('/backend/pages/dashboard', 'DashboardController');
Route::get('uploadfile','UserController@uploadfile');
Route::get('uploadfile','EmployeeController@uploadfile');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/backend/pages/konsultasi/chat', 'ChatsController@index');
Route::get('/contacts', 'ContactsController@get');
Route::resource('/info/kategori', 'KategoriinfoController');
Route::resource('/info', 'InfoController');
Route::resource('/backend/pages/rekomgizi', 'RekomgiziController');

Route::get('/front', ['as' => 'front', 'uses' => 'Frontend\PageController@index']);
Route::get('/front/beranda', 'Frontend\PageController@index');
Route::get('/front/login', 'Frontend\PageController@login');
Route::get('/front/register', 'Frontend\PageController@register');
Route::get('/front/faq', 'Frontend\PageController@faq');
Route::get('/front/tentang', 'Frontend\PageController@tentang');
Route::get('/front/imunisasi', 'Frontend\PageController@imunisasi');
Route::get('/front/artikel', 'Frontend\PageController@artikel');
Route::get('/front/artikel/{id}', 'Frontend\PageController@detail_artikel');
Route::get('/front/layanan', 'Frontend\PageController@layanan');
Route::get('/front/grafiktumbuh', 'Frontend\PageController@grafik');
Route::get('/front/testimoni', 'Frontend\PageController@testimoni');
Route::get('/front/perkembangananak', 'Frontend\PageController@perkembangan');
Route::get('/front/detailimunisasi/{id}', 'Frontend\PageController@detailimunisasi');
Route::get('/front/profile/{id}', 'Frontend\PageController@profile');
Route::get('/front/dataanak/{id}', 'Frontend\PageController@dataanak');
Route::post('/front/buatanak/{id}', 'Frontend\PageController@buatanak');
Route::get('/front/tambahanak/{id}', 'Frontend\PageController@tambahanak');
Route::get('/front/tambahtumbuh/{id}', 'Frontend\PageController@tambahtumbuh');
Route::post('/front/ptumbuh/{id}', 'Frontend\PageController@ptumbuh');
Route::get('/front/detailanak/{id}', 'Frontend\PageController@detailanak');
Route::post('/front/updateanak/{id}', 'Frontend\PageController@updateanak');
Route::post('/front/buattumbuh/{id}','Frontend\PageController@buattumbuh');
Route::get('/front/kondisianak/{id}','Frontend\PageController@kondisianak');
Route::get('/front/grafiktumbuh/{id}/grafik','Frontend\PageController@grafiktumbuh');
Route::get('/front/grafiktumbuh/{id}/viewgrafik','Frontend\PageController@grafikresult');
Route::get('/front/tambahpertumbuhan/{id}', 'Frontend\PageController@tambahpertumbuhan');
Route::get('/front/jadwal', 'Frontend\PageController@jadwal');
Route::get('/front/jadwal/idai', 'Frontend\PageController@jadwalidai');
Route::get('/front/rekomendasigizi', 'Frontend\PageController@rekomen');
Route::get('/front/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/front/contacts', 'Frontend\PageController@get');
Route::get('/front/conversation/{id}', 'Frontend\PageController@getMessagesFor');
Route::post('/front/conversation/send', 'Frontend\PageController@send');
Route::get('/front/konsultasi', 'Frontend\PageController@konsultasi');

    // Route::get('/frontend/login', 'Frontend\PagesController@login']);
    // Route::get('/frontend/register', 'Frontend\PagesController@register']);
    // Route::get('/frontend/forgot', 'Frontend\PagesController@forgot');
    // Route::get('/frontend/faq', 'Frontend\PagesController@faq']);
    // Route::get('/frontend/jadwalimunisasi', 'Frontend\PagesController@jadwal']);
    // Route::get('/frontend/artikel', 'Frontend\PagesController@artikel']);

    // Route::group(['middleware' => ['user_actived']], function() {
    //     Route::group(['middleware' => ['auth']], function() {
    //         Route::get('/frontend/profile/dashboard', ['as' => 'view.profile', 'uses' => 'Frontend\PagesController@viewProfile']);
    //         Route::get('/frontend/profile/tambah-anggota', ['as' => 'view.addanggota', 'uses' => 'Frontend\PagesController@viewAddAnggota']);
    //         Route::get('/frontend/profile/info-tim', ['as' => 'view.info', 'uses' => 'Frontend\PagesController@viewInfoTim']);
    //         Route::get('/frontend/profile/edit_anggota/{id}', ['as' => 'view.edit_anggota', 'uses' => 'Frontend\PagesController@edit_anggota']);
    //         Route::post('/frontend/profile/submit_edit_anggota/{id}', ['as' => 'view.submit_edit_anggota', 'uses' => 'Frontend\PagesController@submit_edit_anggota']);
    //         Route::post('/frontend/profile/submit_add_anggota/', ['as' => 'view.submit_add_anggota', 'uses' => 'Frontend\PagesController@submit_add_anggota']);
    //         Route::get('/frontend/profile/submit_delete_anggota/{id}', ['as' => 'view.submit_delete_anggota', 'uses' => 'Frontend\PagesController@submit_delete_anggota']);
    
    //         Route::post('/frontend/profile/submit_edit_tim/{id}', ['as' => 'view.submit_edit_tim', 'uses' => 'Frontend\PagesController@submit_edit_tim']);
// Route::get('messages', 'ChatsController@fetchMessages');
// Route::post('messages', 'ChatsController@sendMessage');
