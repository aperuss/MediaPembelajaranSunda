<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bab1Controller extends Controller
{
    public function indexguru7(){
        return view('guru.kelas7.bab1siswa7');
    }
    public function indexguru8(){
        return view('guru.kelas8.bab1siswa8');
    }
    public function indexguru9(){
        return view('guru.kelas9.bab1siswa9');
    }

    public function index7(){
        return view('kelas7.bab1siswa7');
    }
    public function index8(){
        return view('kelas8.bab1siswa8');
    }
    public function index9(){
        return view('kelas9.bab1siswa9');
    }
}
