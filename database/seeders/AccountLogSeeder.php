<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AccountLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('account_logs')->truncate();

        DB::table('account_logs')->insert([
            'account_category_id' => 1,
            'amount' => 7314.86,
            'amount_in_text' => 'three thousand three hundred and seventy six taka',
            'date' => Carbon::parse('2024-04-14')->format('Y-m-d'),
            'type' => 'income',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('account_logs')->insert([
            'account_category_id' => 1,
            'amount' => 73.80,
            'amount_in_text' => 'five thousand one hundred and thirty four taka',
            'date' => Carbon::parse('2024-04-15')->format('Y-m-d'),
            'type' => 'income',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('account_logs')->insert([
            'account_category_id' => 1,
            'amount' => 2562.75,
            'amount_in_text' => 'three thousand nine hundred and three taka',
            'date' => Carbon::parse('2024-04-16')->format('Y-m-d'),
            'type' => 'income',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // 
        DB::table('account_logs')->insert([
            'account_category_id' => 1,
            'amount' => 207,
            'amount_in_text' => 'eight thousand four hundred and seventy three taka',
            'date' => Carbon::parse('2024-04-17')->format('Y-m-d'),
            'type' => 'expense',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 5
        DB::table('account_logs')->insert([
            'account_category_id' => 1,
            'amount' => 162,
            'amount_in_text' => 'thirteen thousand four hundred and fourty nine taka',
            'date' => Carbon::parse('2024-04-18')->format('Y-m-d'),
            'type' => 'expense',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Schema::enableForeignKeyConstraints();
        
    }
}
