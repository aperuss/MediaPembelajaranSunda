<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bab8Controller extends Controller
{
    public function indexguru7(){
        return view('guru.kelas7.bab8siswa7');
    }
    public function indexguru8(){
        return view('guru.kelas8.bab8siswa8');
    }

    public function index7(){
        return view('kelas7.bab8siswa7');
    }
    public function index8(){
        return view('kelas8.bab8siswa8');
    }
}
