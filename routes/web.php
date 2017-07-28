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
    return view('welcome');
});
Route::get('/about', function() {
	return '<h1>Halo</h1>'
	.'Selamat datang di webapp saya <br>'
	.'Laravel, emang keren.';
});
Route::get('latihan', function() {
	return view('about');
});
Route::get('about/1', function() {
	return view('about.satu');
});
Route::get('about/2', function() {
	return view('about.dua');
});
Route::get('about/3', function() {
	return view('about.tiga');
});
Route::get('/about/{halaman}', function($a) {
	return 'Ini Halaman About '.$a;
});
Route::get('/{nama}/{sekolah}/{umur}', function($nama,$sekolah,$umur) {
	return 'Nama Saya :'.$nama.
	'<br>Sekolah :'.$sekolah.
	'<br>Umur ku :'.$umur;
});
Route::get('/nama/{halaman}', function($a)
 {
 	$a = '<b>Jhon<b>';
	return 'Ini Halaman About '.$a;
});

Route::get('testmodel', function(){
	$a = App\Post::all();
	return $a;
});
Route::get('testmodel1', function(){
	$a = App\Post::find(1);
	return $a;
});
Route::get('testmodel2', function(){
	$a = App\Post::where('title','like','%ciri keluarga sakinah%')->get();
	return $a;
});
Route::get('testmodel3', function(){
	$a = App\Post::find(1);
	$a->title = "Ciri Keluarga Sakinah";
	$a->save();
	return $a;
});
Route::get('testmodell', function(){
	$a = App\Post::find(1);
	$a->delete();
});
Route::get('testmodelll', function(){
	$a = new App\Post;
	$a->title = "7 Amalan Pembuka Jodoh";
	$a->content = "Shalat malam, sedekah, puasa sunah, silaturahmi, senyum, dan tobat";
	$a->save();
	return $a;
});
Route::get('cektampilan', function(){
	return view('layouts.master');
});