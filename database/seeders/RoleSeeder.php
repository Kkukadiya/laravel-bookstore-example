<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $roleArr = ["Admin","User"];
      foreach($roleArr as $val){
        $roleInfo = Role::firstOrnew(
            [
                "name" => $val
            ]);
        $roleInfo->fill(["name"=>$val]);
        $roleInfo->save();
      }
    }
}
