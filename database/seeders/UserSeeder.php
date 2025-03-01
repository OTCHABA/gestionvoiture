<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>'jamila',
            'email'=>'jamila@gmail.com',
            'password'=> Hash::make('12345') ,
            'admin'=>1,
            'image'=>'/images/profile/userimg.jpg',
        ]);
    }
}
