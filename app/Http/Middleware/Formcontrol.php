<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Formcontrol
{
    public function handle(Request $request, Closure $next)
    {
        if($request->metin=='elma'){
            return redirect()->back();
        }
        return $next($request);
    }
}
