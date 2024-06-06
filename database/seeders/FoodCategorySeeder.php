<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB; 


class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('food_categories')->insert([
            'title' => 'starters',
            'description' => 'Kick off your meal with our delicious starters, perfect for whetting your appetite. Enjoy a variety of appetizers that are sure to set the tone for a delightful dining experience.',
            'image_url' => '/img/CHIPS.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'burgers',
            'description' => 'Indulge in our mouth-watering burgers, made with the freshest ingredients and cooked to perfection. Each bite is a burst of flavor that satisfies your cravings for a hearty meal.',
            'image_url' => '/img/hamburger-and-fries-png-4.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'entrees',
            'description' => "Explore our diverse selection of entrees, crafted to provide a fulfilling and satisfying main course. From classic favorites to innovative dishes, there's something for everyone.",
            'image_url' => '/img/342-3422633_pork-entrees-steak-pork-png.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'sides',
            'description' => "Complement your main course with our tasty sides. Whether you're looking for something light or indulgent, our sides are the perfect addition to any meal.",
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'deserts',
            'description' => "Complement your main course with our tasty sides. Whether you're looking for something light or indulgent, our sides are the perfect addition to any meal.",
            'image_url' => '/img/Download-Cupcake-PNG-Transparent-Image-420x190.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'drinks',
            'description' => "Quench your thirst with our refreshing selection of drinks. From handcrafted cocktails and fine wines to classic sodas and fresh juices, our drink menu has the perfect beverage to complement your meal. Enjoy a taste of refreshment with every sip.",
            'image_url' => '/img/Download-Cupcake-PNG-Transparent-Image-420x190.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
