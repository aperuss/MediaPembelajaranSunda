<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bab2Controller extends Controller
{
    public function indexguru7(){
        return view('guru.kelas7.bab2siswa7');
    }
    public function indexguru8(){
        return view('guru.kelas8.bab2siswa8');
    }
    public function indexguru9(){
        return view('guru.kelas9.bab2siswa9');
    }

    public function index7(){
        return view('kelas7.bab2siswa7');
    }
    public function index8(){
        return view('kelas8.bab2siswa8');
    }
    public function index9(){
        return view('kelas9.bab2siswa9');
    }
}
