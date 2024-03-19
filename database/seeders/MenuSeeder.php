<?php

namespace Database\Seeders;
use App\Models\products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        products::create([
            'food_name' => 'eggs',
            'food_content' => 'Made with eggs, lettuce, salt, oil and other ingredients.',
            'food_price' => '9.99$',
            'food_img' => 'pexels-daniela-constantini-5591664 1.png',
        ]);

        products::create([
            'food_name' => 'Hawaiian pizza',
            'food_content' => 'Made with eggs, lettuce, salt, oil and other ingredients.',
            'food_price' => '15.99$',
            'food_img' => 'pexels-maksim-goncharenok-4773769 1.png',
        ]);

        products::create([
            'food_name' => 'Martinez Cocktail',
            'food_content' => 'Made with eggs, lettuce, salt, oil and other ingredients.',
            'food_price' => '7.25$',
            'food_img' => 'pexels-nadin-sh-12956424 1.png',
        ]);

        products::create([
            'food_name' => 'Butterscotch Cake',
            'food_content' => 'Made with eggs, lettuce, salt, oil and other ingredients.',
            'food_price' => '20.99$',
            'food_img' => 'pexels-ruslan-khmelevsky-7845121 1.png',
        ]);

        products::create([
            'food_name' => 'Mint Lemonade',
            'food_content' => 'Made with eggs, lettuce, salt, oil and other ingredients.',
            'food_price' => '5.89$',
            'food_img' => 'pexels-bam-awey-5335918 1.png',
        ]);

        products::create([
            'food_name' => 'Chocolate Icecream',
            'food_content' => 'Made with eggs, lettuce, salt, oil and other ingredients.',
            'food_price' => '18.05$',
            'food_img' => 'pexels-roman-odintsov-5061254 1.png',
        ]);

        products::create([
            'food_name' => 'Cheese Burger',
            'food_content' => 'Made with eggs, lettuce, salt, oil and other ingredients.',
            'food_price' => '12.55$',
            'food_img' => 'pexels-pixabay-327158 1.png',
        ]);

        products::create([
            'food_name' => 'Classic Waffles',
            'food_content' => 'Made with eggs, lettuce, salt, oil and other ingredients.',
            'food_price' => '12.99$',
            'food_img' => 'pexels-nicola-barts-7937386 1.png',
        ]);


    }
}
