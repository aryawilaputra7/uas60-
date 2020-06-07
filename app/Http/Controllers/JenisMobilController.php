<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class JenisMobilController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('JenisMobil')) return $next($request);
            abort(403, "Anda Tidak Memiliki Cukup Hak Akses");
        });
    }
    /** 
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $title 'JenisMobil';
         return view('JenisMobil.home', compact('title'));
     }
}
