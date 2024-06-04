<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;
class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservations')->insert([
            'fname' => 'Ron',
            'lname' => 'doe',
            'email' => 'Ron@gmail.com',
            'phone_number' => '123-456-7890',
            'guests_total' => rand(1,5),
            'time' => rand(6,10),
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);

        DB::table('reservations')->insert([
            'fname' => 'Mary',
            'lname' => 'doe',
            'email' => 'Mary@gmail.com',
            'phone_number' => '123-456-7890',
            'guests_total' => rand(1,5),
            'time' => rand(6,10),
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
