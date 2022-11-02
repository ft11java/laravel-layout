<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yonet extends Controller
{
    public function site(){
        return view('web');
    }
}
