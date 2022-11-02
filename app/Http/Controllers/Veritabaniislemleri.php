<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Veritabaniislemleri extends Controller
{
   public function ekle(){
    DB::table('bilgiler')->insert([
        'metin'=>'Bu örenk bir metin bilgisidir.'
    ]);
}

public function guncelle(){
    DB::table('bilgiler')->where('id',1)->update([
        'metin'=>'Bu alan güncellenmiştir.'
    ]);
}

public function sil(){
    DB::table('bilgiler')->where('id',1)->delete();
}

public function bilgiler(){
    $veriler=DB::table('bilgiler')->get();
    print_r($veriler);
}
}
