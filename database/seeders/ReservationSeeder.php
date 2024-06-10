<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;
use Faker\Factory as Faker;
class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('reservations')->insert([
        //     'fname' => 'Ron',
        //     'lname' => 'doe',
        //     'email' => 'Ron@gmail.com',
        //     'phone_number' => '123-456-7890',
        //     'guests_total' => rand(1,5),
        //     'time' => rand(6,10),
        //     'updated_at' => Carbon::now(), 
        //     'created_at' => Carbon::now()
        // ]);

        // DB::table('reservations')->insert([
        //     'fname' => 'Mary',
        //     'lname' => 'doe',
        //     'email' => 'Mary@gmail.com',
        //     'phone_number' => '123-456-7890',
        //     'guests_total' => rand(1,5),
        //     'time' => rand(6,10),
        //     'updated_at' => Carbon::now(), 
        //     'created_at' => Carbon::now()
        // ]);

        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('reservations')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'guests_total' => rand(1,5),
                'time' => rand(6,10),
                'updated_at' => $faker->dateTimeThisMonth('now', 'America/New_York'), 
                'created_at' => $faker->dateTimeThisMonth('now', 'America/New_York')
            ]);
        }
        
    }
}
