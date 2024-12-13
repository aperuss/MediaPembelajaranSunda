<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bab3Controller extends Controller
{
    public function indexguru7(){
        return view('guru.kelas7.bab3siswa7');
    }
    public function indexguru8(){
        return view('guru.kelas8.bab3siswa8');
    }
    public function indexguru9(){
        return view('guru.kelas9.bab3siswa9');
    }

    public function index7(){
        return view('kelas7.bab3siswa7');
    }
    public function index8(){
        return view('kelas8.bab3siswa8');
    }
    public function index9(){
        return view('kelas9.bab3siswa9');
    }
}
