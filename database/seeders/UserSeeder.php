<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

          'name'=>'Aya',
          'email'=>'aya58@gmail.com',
          'password'=>Hash::make('12345678'),
          'type'=>'admin',
          
        ]);
        User::create([

          'name'=>'Ali Mohamed',
          'email'=>'Dr-ali@gmail.com',
          'password'=>Hash::make('12345678'),
          'type'=>'doctor',
        ]);
        User::create([

          'name'=>'Sara Ahmed',
          'email'=>'sara ahmed@gmail.com',
          'password'=>Hash::make('12345678'),
        ]);
    }
}
