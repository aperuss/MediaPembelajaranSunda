<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KreditController extends Controller
{
    public function index(){
        return view('guru.kredit');
    }
    public function index7(){
        return view('kelas7.kreditsiswa7');
    }
    public function index8(){
        return view('kelas8.kreditsiswa8');
    }
    public function index9(){
        return view('kelas9.kreditsiswa9');
    }
}
