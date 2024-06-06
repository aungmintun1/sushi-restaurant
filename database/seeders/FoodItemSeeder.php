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

        //burgers
        DB::table('food_items')->insert([
            'title' => 'Texas Burger',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'BBQ Burger',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Billys Burger',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Classic Cheeseburger',
            'description' => 'A juicy beef patty topped with melted cheddar cheese, crisp lettuce, ripe tomatoes, and pickles, all sandwiched in a toasted bun.',
            'image_url' => '/img/classic-cheeseburger.png',
            'price' => 8.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'BBQ Bacon Burger',
            'description' => 'A hearty burger with smoky BBQ sauce, crispy bacon, cheddar cheese, and onion rings on a toasted bun.',
            'image_url' => '/img/bbq-bacon-burger.png',
            'price' => 10.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Spicy Jalapeno Burger',
            'description' => 'A zesty burger featuring spicy jalapenos, pepper jack cheese, and a creamy chipotle mayo, served on a toasted bun.',
            'image_url' => '/img/spicy-jalapeno-burger.png',
            'price' => 9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);


        //starters
        DB::table('food_items')->insert([
            'title' => 'Chicken Wings',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 9.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Garlic Parmesan Breadsticks',
            'description' => 'Freshly baked breadsticks brushed with garlic butter and sprinkled with Parmesan cheese.',
            'image_url' => '/img/garlic-parmesan-breadsticks.png',
            'price' => 4.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Stuffed Mushrooms',
            'description' => 'Button mushrooms stuffed with a blend of cheeses, herbs, and breadcrumbs, then baked to perfection.',
            'image_url' => '/img/stuffed-mushrooms.png',
            'price' => 6.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Buffalo Chicken Dip',
            'description' => 'A creamy blend of shredded chicken, hot sauce, and cheeses served with tortilla chips.',
            'image_url' => '/img/buffalo-chicken-dip.png',
            'price' => 7.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Mozzarella Sticks',
            'description' => 'Crispy on the outside, gooey on the inside, these mozzarella sticks are served with marinara sauce.',
            'image_url' => '/img/mozzarella-sticks.png',
            'price' => 5.99,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Bruschetta',
            'description' => 'Toasted baguette slices topped with a fresh mix of tomatoes, basil, garlic, and olive oil.',
            'image_url' => '/img/bruschetta.png',
            'price' => 6.49,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        //entrees

        DB::table('food_items')->insert([
            'title' => 'Steak',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 20.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Steak and Baby Ribs',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 26.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Grilled Salmon',
            'description' => 'Succulent grilled salmon fillet served with a lemon butter sauce and a side of seasonal vegetables.',
            'image_url' => '/img/grilled-salmon.png',
            'price' => 18.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Chicken Alfredo Pasta',
            'description' => 'Creamy Alfredo sauce tossed with fettuccine pasta and tender grilled chicken breast.',
            'image_url' => '/img/chicken-alfredo-pasta.png',
            'price' => 14.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Beef Stroganoff',
            'description' => 'Savory beef strips cooked in a creamy mushroom sauce, served over a bed of egg noodles.',
            'image_url' => '/img/beef-stroganoff.png',
            'price' => 16.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Vegetable Stir-Fry',
            'description' => 'A colorful mix of stir-fried vegetables served with steamed rice and a choice of tofu or chicken.',
            'image_url' => '/img/vegetable-stir-fry.png',
            'price' => 12.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'BBQ Ribs',
            'description' => 'Tender, fall-off-the-bone pork ribs smothered in our house-made barbecue sauce, served with coleslaw and fries.',
            'image_url' => '/img/bbq-ribs.png',
            'price' => 19.99,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        //sides
        DB::table('food_items')->insert([
            'title' => 'Cesar Salad',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 12.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'French Fries',
            'description' => 'Crispy, golden french fries served with a side of ketchup.',
            'image_url' => '/img/french-fries.png',
            'price' => 2.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Onion Rings',
            'description' => 'Crispy onion rings fried to perfection and served with a tangy dipping sauce.',
            'image_url' => '/img/onion-rings.png',
            'price' => 3.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Coleslaw',
            'description' => 'Freshly shredded cabbage and carrots mixed in a creamy coleslaw dressing.',
            'image_url' => '/img/coleslaw.png',
            'price' => 1.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Mashed Potatoes',
            'description' => 'Creamy mashed potatoes made with real butter and cream.',
            'image_url' => '/img/mashed-potatoes.png',
            'price' => 3.49,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Steamed Vegetables',
            'description' => 'A healthy mix of steamed seasonal vegetables, lightly seasoned.',
            'image_url' => '/img/steamed-vegetables.png',
            'price' => 2.99,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        //deserts
        DB::table('food_items')->insert([
            'title' => 'Tres Leche Cup Cakes',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 4.99,
            'category_id' => 5,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Chocolate Lava Cake',
            'description' => 'A warm, rich chocolate cake with a gooey molten center, served with a scoop of vanilla ice cream.',
            'image_url' => '/img/chocolate-lava-cake.png',
            'price' => 6.99,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Strawberry Cheesecake',
            'description' => 'A creamy cheesecake with a graham cracker crust, topped with fresh strawberries and a strawberry glaze.',
            'image_url' => '/img/strawberry-cheesecake.png',
            'price' => 5.99,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Tiramisu',
            'description' => 'A classic Italian dessert made with layers of coffee-soaked ladyfingers, mascarpone cheese, and cocoa powder.',
            'image_url' => '/img/tiramisu.png',
            'price' => 6.49,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Apple Pie',
            'description' => 'A traditional apple pie with a flaky crust and a sweet, cinnamon-spiced apple filling, served with a scoop of vanilla ice cream.',
            'image_url' => '/img/apple-pie.png',
            'price' => 4.99,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Lemon Meringue Pie',
            'description' => 'A tangy lemon custard pie topped with a fluffy, golden meringue.',
            'image_url' => '/img/lemon-meringue-pie.png',
            'price' => 5.49,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        //drinks
        DB::table('food_items')->insert([
            'title' => 'Coke',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 2.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Sprite',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 2.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Greygoose Shot',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 7.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Hennesy Shot',
            'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            'price' => 7.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Iced Lemonade',
            'description' => 'A refreshing glass of homemade lemonade served over ice.',
            'image_url' => '/img/iced-lemonade.png',
            'price' => 2.50,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        
        DB::table('food_items')->insert([
            'title' => 'Classic Mojito',
            'description' => 'A classic mojito with fresh mint, lime, sugar, and a splash of soda.',
            'image_url' => '/img/classic-mojito.png',
            'price' => 5.99,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
