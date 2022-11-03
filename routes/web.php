<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\Veritabaniislemleri;
use App\Http\Controllers\Employe;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home-page');
});

Route::get('/about', function () {
    return view('about');
});
/*Route::get('/employe', function () {
    return view('employe');
});*/

Route::get('/employe',[Employe::class,'getAllEmploye']);
Route::get('/employecreate',[Employe::class,'createEmploye']);

Route::get('/test/{isim}',[Ornek::class,'test']);

Route::get('/site',[Yonet::class,'site'])->name('site');

Route::get('/form',[Formislemleri::class,'gorunum']);

Route::middleware('arakontrol')->post('/form-sonuc',[Formislemleri::class,'sonuc'])->name('sonuc');

Route::get('/ekle',[Veritabaniislemleri::class,'ekle']);

Route::get('/guncelle',[Veritabaniislemleri::class,'guncelle']);
Route::get('/sil',[Veritabaniislemleri::class,'sil']);
Route::get('/listele',[Veritabaniislemleri::class,'bilgiler']);
Route::get('/listele',[Veritabaniislemleri::class,'bilgiler']);