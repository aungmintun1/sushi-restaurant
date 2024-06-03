<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; 

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'fname' => 'Billy',
            'lname' => 'Smith',
            'email' => 'billy@gmail.com',
            'password' => Hash::make('12345678'),
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'fname' => 'Cindy',
            'lname' => 'Johnson',
            'email' => 'cindy@gmail.com',
            'password' => Hash::make('12345678'),
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
