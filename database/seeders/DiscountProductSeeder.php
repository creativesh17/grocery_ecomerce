<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('discount_products')->insert([
            'product_id' => 1,
            'main_price' => 6500.90,
            'discount_percent' => 5.00,
            'discount_amount' => 325.04,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('discount_products')->insert([
            'product_id' => 2,
            'main_price' => 1220.00,
            'discount_percent' => 5.00,
            'discount_amount' => 61.00,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('discount_products')->insert([
            'product_id' => 3,
            'main_price' => 70.00,
            'discount_percent' => 10.00,
            'discount_amount' => 7.00,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('discount_products')->insert([
            'product_id' => 4,
            'main_price' => 12.00,
            'discount_percent' => 10.00,
            'discount_amount' => 1.20,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('discount_products')->insert([
            'product_id' => 5,
            'main_price' => 800.00,
            'discount_percent' => 10.00,
            'discount_amount' => 80.00,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('discount_products')->insert([
            'product_id' => 6,
            'main_price' => 2047.50,
            'discount_percent' => 10.00,
            'discount_amount' => 204.75,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('discount_products')->insert([
            'product_id' => 7,
            'main_price' => 130.00,
            'discount_percent' => 10.00,
            'discount_amount' => 13.00,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('discount_products')->insert([
            'product_id' => 8,
            'main_price' => 100.00,
            'discount_percent' => 10.00,
            'discount_amount' => 10.00,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('discount_products')->insert([
            'product_id' => 9,
            'main_price' => 90.00,
            'discount_percent' => 10.00,
            'discount_amount' => 9.00,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('discount_products')->insert([
            'product_id' => 10,
            'main_price' => 90.00,
            'discount_percent' => 10.00,
            'discount_amount' => 9.00,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('discount_products')->insert([
            'product_id' => 11,
            'main_price' => 50.00,
            'discount_percent' => 10.00,
            'discount_amount' => 5.00,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // 
        DB::table('discount_products')->insert([
            'product_id' => 12,
            'main_price' => 135.00,
            'discount_percent' => 10.00,
            'discount_amount' => 13.50,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // 
        DB::table('discount_products')->insert([
            'product_id' => 13,
            'main_price' => 170.00,
            'discount_percent' => 10.00,
            'discount_amount' => 17.00,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // 
        DB::table('discount_products')->insert([
            'product_id' => 14,
            'main_price' => 325.00,
            'discount_percent' => 10.00,
            'discount_amount' => 32.50,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // 
        DB::table('discount_products')->insert([
            'product_id' => 15,
            'main_price' => 320.00,
            'discount_percent' => 10.00,
            'discount_amount' => 32.00,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // 
        DB::table('discount_products')->insert([
            'product_id' => 16,
            'main_price' => 156.00,
            'discount_percent' => 10.00,
            'discount_amount' => 15.60,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // 
        DB::table('discount_products')->insert([
            'product_id' => 17,
            'main_price' => 100.00,
            'discount_percent' => 10.00,
            'discount_amount' => 10.00,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // 
        DB::table('discount_products')->insert([
            'product_id' => 18,
            'main_price' => 650.00,
            'discount_percent' => 10.00,
            'discount_amount' => 65.00,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // 
        DB::table('discount_products')->insert([
            'product_id' => 19,
            'main_price' => 130.00,
            'discount_percent' => 10.00,
            'discount_amount' => 13.00,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // 
        DB::table('discount_products')->insert([
            'product_id' => 21,
            'main_price' => 1699.00,
            'discount_percent' => 10.00,
            'discount_amount' => 169.90,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // 
        DB::table('discount_products')->insert([
            'product_id' => 22,
            'main_price' => 50.00,
            'discount_percent' => 10.00,
            'discount_amount' => 5.00,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // 
        DB::table('discount_products')->insert([
            'product_id' => 23,
            'main_price' => 150.00,
            'discount_percent' => 10.00,
            'discount_amount' => 15.00,
            'discount_last_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
