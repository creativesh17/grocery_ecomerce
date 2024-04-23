<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('orders')->truncate();

        DB::table('orders')->insert([
            'account_log_id' => 1,
            'user_id' => 129,
            'order_status' => 'accepted',
            'total_price' => 7364.86,
            'sub_total' => 7314.86,
            'invoice_id' => uniqid(10),
            'invoice_date' => Carbon::parse('2024-04-14')->format('Y-m-d'),
            'payment_status' => 'Pending',
            'delivery_method' => 'inside_dhaka',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2
        DB::table('orders')->insert([
            'account_log_id' => 2,
            'user_id' => 126,
            'order_status' => 'accepted',
            'total_price' => 123.80,
            'sub_total' => 73.80,
            'invoice_id' => uniqid(10),
            'invoice_date' => Carbon::parse('2024-04-15')->format('Y-m-d'),
            'payment_status' => 'Pending',
            'delivery_method' => 'inside_dhaka',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3
        DB::table('orders')->insert([
            'account_log_id' => 3,
            'user_id' => 129,
            'order_status' => 'accepted',
            'total_price' => 2612.75,
            'sub_total' => 2562.75,
            'invoice_id' => uniqid(10),
            'invoice_date' => Carbon::parse('2024-04-16')->format('Y-m-d'),
            'payment_status' => 'Pending',
            'delivery_method' => 'inside_dhaka',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 4
        DB::table('orders')->insert([
            'account_log_id' => 4,
            'user_id' => 126,
            'order_status' => 'accepted',
            'total_price' => 257,
            'sub_total' => 207,
            'invoice_id' => uniqid(10),
            'invoice_date' => Carbon::parse('2024-04-17')->format('Y-m-d'),
            'payment_status' => 'Pending',
            'delivery_method' => 'inside_dhaka',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 5
        DB::table('orders')->insert([
            'account_log_id' => 5,
            'user_id' => 129,
            'order_status' => 'accepted',
            'total_price' => 212,
            'sub_total' => 162,
            'invoice_id' => uniqid(10),
            'invoice_date' => Carbon::parse('2024-04-18')->format('Y-m-d'),
            'payment_status' => 'Pending',
            'delivery_method' => 'inside_dhaka',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Schema::enableForeignKeyConstraints();
        
    }
}
