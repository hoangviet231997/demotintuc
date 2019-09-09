<?php
// use Illuminate\Routing\Route;

// use Illuminate\Routing\Route;

// use Symfony\Component\Routing\Annotation\Route;

// use Illuminate\Routing\Route;

// use Symfony\Component\Routing\Annotation\Route;

// use Symfony\Component\Routing\Annotation\Route;

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
    return view('welcome');
});


Route::get('get-post/{id}', 'PostController@findPostById');
Route::get('get-all-post', 'PostController@getAllPost');

Route::get('get-post-follow-category/{id}','CategoriesController@getPostFollowCategory');
Route::get('get-all-cate','CategoriesController@getAllCategori');

//dang ky
Route::get('dangky','LoginController@getDangKy');
Route::post('dangky','LoginController@postDangKy')->name('dangky');
//dang nhap
Route::get('dangnhap','LoginController@getDangNhap');
Route::post('dangnhap','LoginController@postDangNhap')->name('dangnhap');
//update
Route::get('Update','LoginController@getUpDate');
Route::post('Update','LoginController@postUpdate')->name('update');
//delete
Route::get('Delete','LoginController@getDelete');
Route::post('Delete','LoginController@postDelete')->name('delete');


//Trang Admin
Route::get('Page-Admin','AdminController@getAllUser');

Route::get('Update-Admin/{id}','AdminController@getUpdaUser')->name('layid');
Route::post('Update-Admin','AdminController@postUpdaUser')->name('Sua');

Route::get('Delete-Admin/{id}','AdminController@getDelUser')->name('xoaId');
Route::post('Delete-Admin','AdminController@postDelUser')->name('Xoa');



//REsful API
Route::resource('hocsinh','HocSinhController');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//

Route::get('thanh-vien','ThanhvienController@insert');

//

Route::group(['prefix'=>'authen'],
function() {
    Route::get('register','HomeController@index');
});

//

Route::get('exel','ExcelController@export');
