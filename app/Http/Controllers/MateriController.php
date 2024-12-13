<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index(){
        return view('guru.materisiswa');
    }
    public function index7(){
        return view('kelas7.materisiswa7');
    }
    public function index8(){
         return view('kelas8.materisiswa8');
    }
    public function index9(){
        return view('kelas9.materisiswa9');
    }
}
