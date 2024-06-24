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
            'title' => 'sushi & sashimi',
            'description' => 'Experience the exquisite flavors of our Sushi & Sashimi, featuring expertly crafted rolls and the freshest slices of raw fish, served with traditional accompaniments for an authentic Japanese dining experience.',
            'image_url' => 'sashimi.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'entrees',
            'description' => "Indulge in our delicious entrées, offering a perfect start to your sushi experience with a variety of flavors and textures that set the stage for the main course.",
            'image_url' => 'entrees.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'sushi rolls',
            'description' => 'Savor our expertly crafted sushi rolls, combining fresh ingredients and exquisite flavors to create a delightful culinary experience.',
            'image_url' => 'rolls.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'desserts',
            'description' => "Complement your main course with our tasty sides. Whether you're looking for something light or indulgent, our sides are the perfect addition to any meal.",
            'image_url' => 'Download-Cupcake-PNG-Transparent-Image-420x190.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
   
        DB::table('food_categories')->insert([
            'title' => 'salads',
            'description' => " Delight in our fresh and flavorful salads, crafted with crisp greens, vibrant vegetables, and unique dressings for a perfect start to your meal.",
            'image_url' => 'Download-Salad-Transparent-PNG.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'starters',
            'description' => "Begin your dining experience with our tantalizing starters, offering a variety of small bites to awaken your taste buds.",
            'image_url' => 'starters1.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'mains',
            'description' => "Indulge in our exquisite main dishes, featuring a selection of expertly prepared sushi, sashimi, and other Japanese specialties.",
            'image_url' => 'main1.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    
        DB::table('food_categories')->insert([
            'title' => 'drinks',
            'description' => "Quench your thirst with our refreshing selection of drinks. From handcrafted cocktails and fine wines to classic sodas and fresh juices, our drink menu has the perfect beverage to complement your meal. Enjoy a taste of refreshment with every sip.",
            'image_url' => 'drink.png',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
