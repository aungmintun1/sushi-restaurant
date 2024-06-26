<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(FoodCategorySeeder::class);
        $this->call(FoodItemSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(ReservationSeeder::class);
    }
}

//FoodItem Id is dependent on category_id so categories should be on top of items