<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $adminInfo = User::firstOrnew(["email" => "admin@gmail.com"]);
        $adminInfo->fill(["name"=>"admin",
                         "email"=>"admin@gmail.com",
                         "password" =>bcrypt('12345678'),
                         "role_id"  =>1
                ]);
        $adminInfo->save();


        $userInfo = User::firstOrnew(["email" => "user@gmail.com"]);
        $userInfo->fill(["name"=>"User",
                         "email"=>"user@gmail.com",
                         "password" =>bcrypt('12345678'),
                         "role_id"  =>2
                ]);
        $userInfo->save();
      }
}

