<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class datauser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData =[
            [
                'name'=>'Susi mulyawati S. Pd',
                'email'=>'susie@gmail.com',
                'peran'=>'guru',
                'password'=>bcrypt('gurusunda1234')
            ],
            [
                'name'=>'Kelas 7',
                'email'=>'siswakelas7@gmail.com',
                'peran'=>'kelas7',
                'password'=>bcrypt('kelastujuh1234')
            ],
            [
                'name'=>'Kelas 8',
                'email'=>'siswakelas8@gmail.com',
                'peran'=>'kelas8',
                'password'=>bcrypt('kelasdalapan1234')
            ],
            [
                'name'=>'Kelas 9',
                'email'=>'siswakelas9@gmail.com',
                'peran'=>'kelas9',
                'password'=>bcrypt('kelassalapan1234')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
