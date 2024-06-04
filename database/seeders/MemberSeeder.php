<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB; 

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('members')->insert([
            'fname' => 'john',
            'lname' => 'doe',
            'email' => 'john@gmail.com',
            'phone_number' => '123-456-7890',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('members')->insert([
            'fname' => 'jane',
            'lname' => 'doe',
            'email' => 'jane@gmail.com',
            'phone_number' => '123-456-7890',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
     
    }
}
