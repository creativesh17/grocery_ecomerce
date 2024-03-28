<?php

namespace Database\Seeders;

use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Tag::truncate();

        Tag::insert([
            // 1
        	[
        		'title' => 'Household',
        		'url' => Str::slug('Household'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 2
        	[
        		'title' => 'Houseware',
        		'url' => Str::slug('Houseware'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 3
        	[
        		'title' => 'Melamine',
        		'url' => Str::slug('Melamine'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 4
        	[
        		'title' => 'Eggs',
        		'url' => Str::slug('Eggs'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 5
        	[
        		'title' => 'Organic',
        		'url' => Str::slug('Organic'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
           
            // 6
        	[
        		'title' => 'Oil',
        		'url' => Str::slug('Oil'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 7
        	[
        		'title' => 'Vegetarian',
        		'url' => Str::slug('Vegetarian'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 8
        	[
        		'title' => 'Rice',
        		'url' => Str::slug('Rice'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 9
        	[
        		'title' => 'Atta',
        		'url' => Str::slug('Atta'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 10
        	[
        		'title' => 'Meat',
        		'url' => Str::slug('Meat'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
           
            // 11
        	[
        		'title' => 'Beef',
        		'url' => Str::slug('Beef'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],

            // 12
        	[
        		'title' => 'Women',
        		'url' => Str::slug('Women'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 13
        	[
        		'title' => 'Sanitary',
        		'url' => Str::slug('Sanitary'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 14
        	[
        		'title' => 'Pads',
        		'url' => Str::slug('Pads'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],

            // 15
        	[
        		'title' => 'Dal',
        		'url' => Str::slug('Dal'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 16
        	[
        		'title' => 'Lentil',
        		'url' => Str::slug('Lentil'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 17
        	[
        		'title' => 'Salt',
        		'url' => Str::slug('Salt'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 18
        	[
        		'title' => 'Dish',
        		'url' => Str::slug('Dish'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
           
            // 19
        	[
        		'title' => 'Washing Liquid',
        		'url' => Str::slug('Washing Liquid'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],

            // 20
        	[
        		'title' => 'Isobgul Bhushi',
        		'url' => Str::slug('Isobgul Bhushi'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],

            // 21
        	[
        		'title' => 'Vinegar',
        		'url' => Str::slug('Vinegar'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 22
        	[
        		'title' => 'Apple Vinegar',
        		'url' => Str::slug('Apple Vinegar'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],

            // 23
        	[
        		'title' => 'Deshi',
        		'url' => Str::slug('Deshi'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 24
        	[
        		'title' => 'Paratha',
        		'url' => Str::slug('Paratha'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 25
        	[
        		'title' => 'Family Pack',
        		'url' => Str::slug('Family Pack'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],

            // 26
        	[
        		'title' => 'Noodles',
        		'url' => Str::slug('Noodles'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 27
        	[
        		'title' => 'Chicken Noodles',
        		'url' => Str::slug('Chicken Noodles'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],

            // 28
        	[
        		'title' => 'Sauce',
        		'url' => Str::slug('Tomato Sauce'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 29
        	[
        		'title' => 'Tomato Sauce',
        		'url' => Str::slug('Tomato Sauce'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
           
            // 30
        	[
        		'title' => 'Cocoa',
        		'url' => Str::slug('Cocoa'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],

            // 31
        	[
        		'title' => 'Potato Crisps',
        		'url' => Str::slug('Potato Crisps'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 32
        	[
        		'title' => 'Sour Cream',
        		'url' => Str::slug('Sour Cream'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 33
        	[
        		'title' => 'Sour Onion',
        		'url' => Str::slug('Sour Onion'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],

            // 34
        	[
        		'title' => 'Bread',
        		'url' => Str::slug('Bread'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 35
        	[
        		'title' => 'Bakery',
        		'url' => Str::slug('Bakery'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 36
        	[
        		'title' => 'Bread and Bakery',
        		'url' => Str::slug('Bread and Bakery'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],

            // 37
        	[
        		'title' => 'Health',
        		'url' => Str::slug('Health'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 38
        	[
        		'title' => 'Honey',
        		'url' => Str::slug('Honey'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],


			// 39
        	[
        		'title' => 'Health',
        		'url' => Str::slug('Health'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 40
        	[
        		'title' => 'Honey',
        		'url' => Str::slug('Honey'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 41
        	[
        		'title' => 'Deesert',
        		'url' => Str::slug('Deesert'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],

           
            // 42
        	[
        		'title' => 'Cookies',
        		'url' => Str::slug('Cookies'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
           


        ]);

        Schema::enableForeignKeyConstraints();
    }
}
