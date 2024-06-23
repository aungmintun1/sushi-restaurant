<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //sushi and sashimi
        DB::table('food_items')->insert([
            'title' => 'Avocado Sashimi',
            'description' => 'Sliced fresh avocado',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 7.90,
            'category_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Maguro Sashimi',
            'description' => 'Sliced raw fresh tuna',
            'image_url' => '/img/tuna-sashimi.png',
            'price' => 9.90,
            'category_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Sake Sashimi',
            'description' => 'Sliced raw fresh salmon',
            'image_url' => '/img/salmon-sashimi.png',
            'price' => 9.90,
            'category_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Ika Geso Sushi',
            'description' => 'Squid legs sushi',
            'image_url' => '/img/squid-sushi.png',
            'price' => 3.50,
            'category_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Maguro Sushi',
            'description' => 'Tuna sushi',
            'image_url' => '/img/tuna-sushi.png',
            'price' => 3.50,
            'category_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);

        //Entrees
        DB::table('food_items')->insert([
            'title' => 'Fried Rice',
            'description' => 'Full or half order, cooked with carrots, onions, scallions, eggs and your choice of chicken/beef/shrimp/smoked salmon/seafood/veggies',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.90,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Surf and Turf Bowl',
            'description' => 'Hot pot bowl with steamed rice, shrimp, scallop, beef, mixed veggies and red pickle',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 19.00,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Salmon Japanese Pasta',
            'description' => 'Grilled salmon topped with basil pesto. Served with Japanese pasta, garlic butter, broccoli and red pickle',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 22.00,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Eurasia Veggies sauté',
            'description' => 'Tofu, eggplant, zucchini, carrots, broccoli, mushrooms, bell peppers and Asian vegetables',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 16.00,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Katzu',
            'description' => 'Cutlet fried in Japanese panko breadcrumbs, with carrots, broccoli, katzu BBQ sauce and your choice of chicken or pork',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 15.50,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        //sushi rolls
        DB::table('food_items')->insert([
            'title' => 'Nuka Zuke Maki',
            'description' => 'Pickled vegetables rolls',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 3.90,
            'category_id' => 3,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Sake Maki',
            'description' => 'Salmon rolls',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4.90,
            'category_id' => 3,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Negi Sake Maki',
            'description' => 'Salmon & spring onion rolls',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4.90,
            'category_id' => 3,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Tuna Maki',
            'description' => 'Cooked tuna rolls',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4.90,
            'category_id' => 3,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        //desserts
        DB::table('food_items')->insert([
            'title' => 'Whoopie Pie Alaska',
            'description' => 'Chocolate cake, toasted marshmallow, toffee',
            'image_url' => '/img/whoopie-pie-alaska.png',
            'price' => 12.00,
            'category_id' => 4,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Croissant Bread Pudding',
            'description' => 'Chocolate, pumpkin, banana caramel ice cream',
            'image_url' => '/img/croissant-bread-pudding.png',
            'price' => 10.00,
            'category_id' => 4,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Apple Crumble',
            'description' => 'Spiced crumble, vanilla ice cream',
            'image_url' => '/img/apple-crumble.png',
            'price' => 10.00,
            'category_id' => 4,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Sorbet of the Day',
            'description' => 'Painting goat fruit sorbet',
            'image_url' => '/img/sorbet-of-the-day.png',
            'price' => 9.00,
            'category_id' => 4,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Fried Cheesecake',
            'description' => 'Cheesecake wrapped with thin crust and drizzled with cinnamon powder and brown sugar. Served with vanilla ice cream',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.00,
            'category_id' => 4,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Kakigori',
            'description' => 'Japanese shaved ice with green tea, red bean, fruit jelly and topped with green tea ice cream',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 8.00,
            'category_id' => 4,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Tempura Ice Cream',
            'description' => 'Vanilla or green tea ice cream wrapped with cake and fried with tempura',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 7.00,
            'category_id' => 4,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);

        //salads
        DB::table('food_items')->insert([
            'title' => 'Side House',
            'description' => 'Spring mix, tomato, cucumber, carrot',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 7.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Louie',
            'description' => 'Dungeness crab, mexican wild prawns, avocado, egg, tomato, cucumber, louie dressing',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 19.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Spinach & Quinoa',
            'description' => 'Avocado, egg, tomatoes, carrot',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 12.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Cobb',
            'description' => 'Mexican wild prawns, bacon, avocado, egg, tomatoes, blue cheese crumbles',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 18.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        //starters
        DB::table('food_items')->insert([
            'title' => 'Santorini Fava',
            'description' => 'Warm fava, red onion, capers',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 7.00,
            'category_id' => 6,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Kopanisti',
            'description' => 'Roasted red pepper, feta, boukovo chili',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.00,
            'category_id' => 6,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Cured Sea Trout',
            'description' => 'Roast beetroot & beetroot ketchup',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 6.00,
            'category_id' => 6,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Seafood Soup',
            'description' => 'Gruyere, garlic croutons & rouille',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 8.00,
            'category_id' => 6,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Wild Red Tiger Prawns',
            'description' => 'Herb butter, chargrilled sourdough',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 11.00,
            'category_id' => 6,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        //mains        
        DB::table('food_items')->insert([
            'title' => 'Charcoal Grilled Black Sea Bream',
            'description' => 'salsa verde',
            'image_url' => '/img/placeholder.png',
            'price' => 17.00,
            'category_id' => 7,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Tandoori Monkfish',
            'description' => 'charred gem, red cabbage & carrot slaw, raita',
            'image_url' => '/img/placeholder.png',
            'price' => 22.00,
            'category_id' => 7,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Chargrilled Seafood Platter',
            'description' => 'seabream, red tiger prawns, squid, shellfish, chargrilled broccoli & lemon (for 2 to share)',
            'image_url' => '/img/placeholder.png',
            'price' => 34.00,
            'category_id' => 7,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Flat Iron Steak',
            'description' => 'chimmichurri',
            'image_url' => '/img/placeholder.png',
            'price' => 15.00,
            'category_id' => 7,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Sicilian Seafoodstew',
            'description' => 'red mullet, shellfish, red tiger prawns, mint & sourdough',
            'image_url' => '/img/placeholder.png',
            'price' => 20.00,
            'category_id' => 7,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Beer Battered Fish & Chips',
            'description' => 'mushypeas',
            'image_url' => '/img/placeholder.png',
            'price' => 16.00,
            'category_id' => 7,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Red Panang Malaysiancurry',
            'description' => 'bream fillet, red tiger prawns, basmati rice',
            'image_url' => '/img/placeholder.png',
            'price' => 18.00,
            'category_id' => 7,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    
          //drinks
          DB::table('food_items')->insert([
            'title' => 'Chardonnay',
            'description' => 'A crisp Chardonnay with notes of citrus and a refreshing, buttery finish.',
            'image_url' => '/img/chardonnay.png',
            'price' => 8.99,
            'category_id' => 8,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Merlot',
            'description' => 'A velvety Merlot with rich berry flavors and a smooth, elegant finish.',
            'image_url' => '/img/merlot.png',
            'price' => 9.99,
            'category_id' => 8,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Greygoose Shot',
            'description' => 'A smooth and refined shot of premium Grey Goose vodka, perfect for a quick, elegant indulgence.',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 7.99,
            'category_id' => 8,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Hennesy Shot',
            'description' => 'A rich and bold shot of Hennessy cognac, delivering a taste of luxury in every sip.',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 7.99,
            'category_id' => 8,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Iced Lemonade',
            'description' => 'A refreshing glass of homemade lemonade served over ice.',
            'image_url' => '/img/iced-lemonade.png',
            'price' => 2.50,
            'category_id' => 8,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Classic Mojito',
            'description' => 'A classic mojito with fresh mint, lime, sugar, and a splash of soda.',
            'image_url' => '/img/classic-mojito.png',
            'price' => 5.99,
            'category_id' => 8,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    

  
    }
}
