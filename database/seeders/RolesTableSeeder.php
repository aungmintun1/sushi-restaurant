<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create roles
        DB:: table('roles')->insert([
            'title' => 'Admin'
        ]);

        DB::table('roles')->insert([
            'title' => 'Employee',
        ]);

        //assigned user a role
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
            //we make billy an admin. 
            //billy is 1 and admin 1

        ]);
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 2,
        ]);
    }
}
