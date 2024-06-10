<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB; 
use Faker\Factory as Faker;
class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // DB::table('members')->insert([
        //     'fname' => 'john',
        //     'lname' => 'doe',
        //     'email' => 'john@gmail.com',
        //     'phone_number' => '123-456-7890',
        //     'updated_at' => Carbon::now(), 
        //     'created_at' => Carbon::now()
        // ]);
        // DB::table('members')->insert([
        //     'fname' => 'jane',
        //     'lname' => 'doe',
        //     'email' => 'jane@gmail.com',
        //     'phone_number' => '123-456-7890',
        //     'updated_at' => Carbon::now(), 
        //     'created_at' => Carbon::now()
        // ]);

        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('members')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'updated_at' => $faker->dateTimeThisMonth('now', 'America/New_York'), 
                'created_at' => $faker->dateTimeThisMonth('now', 'America/New_York')
            ]);
        }
        
     
    }
}
