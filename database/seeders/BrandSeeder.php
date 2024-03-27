<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Brand::truncate();

        Brand::insert([
            // 1
        	[
        		'name' => 'Mithai',
		        'url' => Str::slug('Mithai'),
		        'creator' => '1',
		        'slug' => Str::slug('Mithai'),
		    ],
            // 2
        	[
        		'name' => 'Tasty Treat',
		        'url' => Str::slug('Tasty Treat'),
		        'creator' => '1',
		        'slug' => Str::slug('Tasty Treat'),
		    ],
            // 3
        	[
        		'name' => 'PRAN',
		        'url' => Str::slug('PRAN'),
		        'creator' => '1',
		        'slug' => Str::slug('PRAN'),
		    ],
            // 4
        	[
        		'name' => 'Pran Dairy',
		        'url' => Str::slug('Pran Dairy'),
		        'creator' => '1',
		        'slug' => Str::slug('Pran Dairy'),
		    ],
            // 5
        	[
        		'name' => 'Natore Agro',
		        'url' => Str::slug('Natore Agro'),
		        'creator' => '1',
		        'slug' => Str::slug('Natore Agro'),
		    ],
            // 6
        	[
        		'name' => 'PRAN Agro',
		        'url' => Str::slug('PRAN Agro'),
		        'creator' => '1',
		        'slug' => Str::slug('PRAN Agro'),
		    ],
            // 7
        	[
        		'name' => 'PRAN Beverage',
		        'url' => Str::slug('PRAN Beverage'),
		        'creator' => '1',
		        'slug' => Str::slug('PRAN Beverage'),
		    ],
            // 8
        	[
        		'name' => 'PRAN Confectionery',
		        'url' => Str::slug('PRAN Confectionery'),
		        'creator' => '1',
		        'slug' => Str::slug('PRAN Confectionery'),
		    ],
            // 9
        	[
        		'name' => 'AMCL',
		        'url' => Str::slug('AMCL'),
		        'creator' => '1',
		        'slug' => Str::slug('AMCL'),
		    ],
            // 10
        	[
        		'name' => 'Bango Millers',
		        'url' => Str::slug('Bango Millers'),
		        'creator' => '1',
		        'slug' => Str::slug('Bango Millers'),
		    ],
            // 11
        	[
        		'name' => 'Drinkit',
		        'url' => Str::slug('Drinkit'),
		        'creator' => '1',
		        'slug' => Str::slug('Drinkit'),
		    ],
            // 12
        	[
        		'name' => 'Wonder Cake',
		        'url' => Str::slug('Wonder Cake'),
		        'creator' => '1',
		        'slug' => Str::slug('Wonder Cake'),
		    ],
            // 13
        	[
        		'name' => 'Clear',
		        'url' => Str::slug('Clear'),
		        'creator' => '1',
		        'slug' => Str::slug('Clear'),
		    ],
            // 14
        	[
        		'name' => 'Clinic Plus',
		        'url' => Str::slug('Clinic Plus'),
		        'creator' => '1',
		        'slug' => Str::slug('Clinic Plus'),
		    ],
            // 15
        	[
        		'name' => 'Dabur',
		        'url' => Str::slug('Dabur'),
		        'creator' => '1',
		        'slug' => Str::slug('Dabur'),
		    ],
            // 16
        	[
        		'name' => 'Nestle',
		        'url' => Str::slug('Nestle'),
		        'creator' => '1',
		        'slug' => Str::slug('Nestle'),
		    ],
            // 17
        	[
        		'name' => 'Parachute',
		        'url' => Str::slug('Parachute'),
		        'creator' => '1',
		        'slug' => Str::slug('Parachute'),
		    ],
            // 18
        	[
        		'name' => 'Mr. Noodles',
		        'url' => Str::slug('Mr. Noodles'),
		        'creator' => '1',
		        'slug' => Str::slug('Mr. Noodles'),
		    ],
            // 19
        	[
        		'name' => 'Ray',
		        'url' => Str::slug('Ray'),
		        'creator' => '1',
		        'slug' => Str::slug('Ray'),
		    ],
            // 20
        	[
        		'name' => 'PRAN Up',
		        'url' => Str::slug('PRAN Up'),
		        'creator' => '1',
		        'slug' => Str::slug('PRAN Up'),
		    ],
            // 21
        	[
        		'name' => 'Haiko',
		        'url' => Str::slug('Haiko'),
		        'creator' => '1',
		        'slug' => Str::slug('Haiko'),
		    ],
            // 22
        	[
        		'name' => 'M.M. Ispahani',
		        'url' => Str::slug('M.M. Ispahani'),
		        'creator' => '1',
		        'slug' => Str::slug('M.M. Ispahani'),
		    ],
            // 23
        	[
        		'name' => 'Transcom Beverage',
		        'url' => Str::slug('Transcom Beverage'),
		        'creator' => '1',
		        'slug' => Str::slug('Transcom Beverage'),
		    ],
            // 24
        	[
        		'name' => 'ACI Limited',
		        'url' => Str::slug('ACI Limited'),
		        'creator' => '1',
		        'slug' => Str::slug('ACI Limited'),
		    ],
            // 25
        	[
        		'name' => 'Meghna Group of Industries',
		        'url' => Str::slug('Meghna Group of Industries'),
		        'creator' => '1',
		        'slug' => Str::slug('Meghna Group of Industries'),
		    ],
            // 26
        	[
        		'name' => 'Abul Khair & Company',
		        'url' => Str::slug('Abul Khair & Company'),
		        'creator' => '1',
		        'slug' => Str::slug('Abul Khair & Company'),
		    ],
            // 27
        	[
        		'name' => 'New Zealand Dairy',
		        'url' => Str::slug('New Zealand Dairy'),
		        'creator' => '1',
		        'slug' => Str::slug('New Zealand Dairy'),
		    ],
            // 28
        	[
        		'name' => 'Kohinoor Chemical Co. Ltd',
		        'url' => Str::slug('Kohinoor Chemical Co. Ltd'),
		        'creator' => '1',
		        'slug' => Str::slug('Kohinoor Chemical Co. Ltd'),
		    ],
            // 29
        	[
        		'name' => 'Square Consumer Ltd',
		        'url' => Str::slug('Square Consumer Ltd'),
		        'creator' => '1',
		        'slug' => Str::slug('Square Consumer Ltd'),
		    ],
            // 30
        	[
        		'name' => 'Haque Brothers',
		        'url' => Str::slug('Haque Brothers'),
		        'creator' => '1',
		        'slug' => Str::slug('Haque Brothers'),
		    ],
            // 31
        	[
        		'name' => 'Quasem Drycells Ltd',
		        'url' => Str::slug('Quasem Drycells Ltd'),
		        'creator' => '1',
		        'slug' => Str::slug('Quasem Drycells Ltd'),
		    ],
            // 32
        	[
        		'name' => 'Olympic Industries Ltd',
		        'url' => Str::slug('Olympic Industries Ltd'),
		        'creator' => '1',
		        'slug' => Str::slug('Olympic Industries Ltd'),
		    ],
            // 33
        	[
        		'name' => 'Cocola Food Products',
		        'url' => Str::slug('Cocola Food Products'),
		        'creator' => '1',
		        'slug' => Str::slug('Cocola Food Products'),
		    ],
            // 34
        	[
        		'name' => 'Bangladesh Edible Oil Ltd',
		        'url' => Str::slug('Bangladesh Edible Oil Ltd'),
		        'creator' => '1',
		        'slug' => Str::slug('Bangladesh Edible Oil Ltd'),
		    ],
            // 35
        	[
        		'name' => 'Unilever',
		        'url' => Str::slug('Unilever'),
		        'creator' => '1',
		        'slug' => Str::slug('Unilever'),
		    ],
            // 36
        	[
        		'name' => 'Green Food Products',
		        'url' => Str::slug('Green Food Products'),
		        'creator' => '1',
		        'slug' => Str::slug('Green Food Products'),
		    ],
            // 37
        	[
        		'name' => 'Kazi & Kazi',
		        'url' => Str::slug('Kazi & Kazi'),
		        'creator' => '1',
		        'slug' => Str::slug('Kazi & Kazi'),
		    ],
            // 38
        	[
        		'name' => 'Q&Q',
		        'url' => Str::slug('Q&Q'),
		        'creator' => '1',
		        'slug' => Str::slug('Q&Q'),
		    ],
            // 39
        	[
        		'name' => 'Bashundhara Paper Mills',
		        'url' => Str::slug('Bashundhara Paper Mills'),
		        'creator' => '1',
		        'slug' => Str::slug('Bashundhara Paper Mills'),
		    ],
            // 40
        	[
        		'name' => 'Marico Bangladesh',
		        'url' => Str::slug('Marico Bangladesh'),
		        'creator' => '1',
		        'slug' => Str::slug('Marico Bangladesh'),
		    ],
            // 41
        	[
        		'name' => 'Staysafe',
		        'url' => Str::slug('Staysafe'),
		        'creator' => '1',
		        'slug' => Str::slug('Staysafe'),
		    ],
            // 42
        	[
        		'name' => 'All Time',
		        'url' => Str::slug('All Time'),
		        'creator' => '1',
		        'slug' => Str::slug('All Time'),
		    ],
            // 43
        	[
        		'name' => 'Jhatpot',
		        'url' => Str::slug('Jhatpot'),
		        'creator' => '1',
		        'slug' => Str::slug('Jhatpot'),
		    ],
            // 44
        	[
        		'name' => 'Bisk Club',
		        'url' => Str::slug('Bisk Club'),
		        'creator' => '1',
		        'slug' => Str::slug('Bisk Club'),
		    ],
            // 45
        	[
        		'name' => 'Cadbury',
		        'url' => Str::slug('Cadbury'),
		        'creator' => '1',
		        'slug' => Str::slug('Cadbury'),
		    ],
            // 46
        	[
        		'name' => "Foster Clark's",
		        'url' => Str::slug("Foster Clark's"),
		        'creator' => '1',
		        'slug' => Str::slug("Foster Clark's"),
		    ],
            // 47
        	[
        		'name' => 'IFAD',
		        'url' => Str::slug('IFAD'),
		        'creator' => '1',
		        'slug' => Str::slug('IFAD'),
		    ],
            // 48
        	[
        		'name' => 'PBL',
		        'url' => Str::slug('PBL'),
		        'creator' => '1',
		        'slug' => Str::slug('PBL'),
		    ],
            // 49
        	[
        		'name' => 'Radhuni',
		        'url' => Str::slug('Radhuni'),
		        'creator' => '1',
		        'slug' => Str::slug('Radhuni'),
		    ],
            // 50
        	[
        		'name' => 'Shaad',
		        'url' => Str::slug('Shaad'),
		        'creator' => '1',
		        'slug' => Str::slug('Shaad'),
		    ],
            // 51
        	[
        		'name' => 'GSK',
		        'url' => Str::slug('GSK'),
		        'creator' => '1',
		        'slug' => Str::slug('GSK'),
		    ],
            // 52
        	[
        		'name' => 'Kazi Farms',
		        'url' => Str::slug('Kazi Farms'),
		        'creator' => '1',
		        'slug' => Str::slug('Kazi Farms'),
		    ],
            // 53
        	[
        		'name' => 'Igloo',
		        'url' => Str::slug('Igloo'),
		        'creator' => '1',
		        'slug' => Str::slug('Igloo'),
		    ],
            // 54
        	[
        		'name' => 'Transcom',
		        'url' => Str::slug('Transcom'),
		        'creator' => '1',
		        'slug' => Str::slug('Transcom'),
		    ],
            // 55
        	[
        		'name' => 'Godrej',
		        'url' => Str::slug('Godrej'),
		        'creator' => '1',
		        'slug' => Str::slug('Godrej'),
		    ],
            // 56
        	[
        		'name' => 'PRAN Drinking Water',
		        'url' => Str::slug('PRAN Drinking Water'),
		        'creator' => '1',
		        'slug' => Str::slug('PRAN Drinking Water'),
		    ],
            // 57
        	[
        		'name' => 'ACTIVO',
		        'url' => Str::slug('ACTIVO'),
		        'creator' => '1',
		        'slug' => Str::slug('ACTIVO'),
		    ],
            // 58
        	[
        		'name' => 'PUSTI',
		        'url' => Str::slug('PUSTI'),
		        'creator' => '1',
		        'slug' => Str::slug('PUSTI'),
		    ],
            // 59
        	[
        		'name' => 'PCL',
		        'url' => Str::slug('PCL'),
		        'creator' => '1',
		        'slug' => Str::slug('PCL'),
		    ],
            // 60
        	[
        		'name' => 'Metro',
		        'url' => Str::slug('Metro'),
		        'creator' => '1',
		        'slug' => Str::slug('Metro'),
		    ],
            // 61
        	[
        		'name' => 'Rongdhonu',
		        'url' => Str::slug('Rongdhonu'),
		        'creator' => '1',
		        'slug' => Str::slug('Rongdhonu'),
		    ],
            // 62
        	[
        		'name' => 'Origin',
		        'url' => Str::slug('Origin'),
		        'creator' => '1',
		        'slug' => Str::slug('Origin'),
		    ],
            // 63
        	[
        		'name' => 'Paragon',
		        'url' => Str::slug('Paragon'),
		        'creator' => '1',
		        'slug' => Str::slug('Paragon'),
		    ],
            // 64
        	[
        		'name' => 'RiBANA',
		        'url' => Str::slug('RiBANA'),
		        'creator' => '1',
		        'slug' => Str::slug('RiBANA'),
		    ],
            // 65
        	[
        		'name' => 'Divino',
		        'url' => Str::slug('Divino'),
		        'creator' => '1',
		        'slug' => Str::slug('Divino'),
		    ],
            // 66
        	[
        		'name' => 'Gluget-D',
		        'url' => Str::slug('Gluget-D'),
		        'creator' => '1',
		        'slug' => Str::slug('Gluget-D'),
		    ],
            // 67
        	[
        		'name' => 'Rokomari Food',
		        'url' => Str::slug('Rokomari Food'),
		        'creator' => '1',
		        'slug' => Str::slug('Rokomari Food'),
		    ],
            // 68
        	[
        		'name' => 'Meat & Bones',
		        'url' => Str::slug('Meat & Bones'),
		        'creator' => '1',
		        'slug' => Str::slug('Meat & Bones'),
		    ],
            // 69
        	[
        		'name' => 'AKIJ Flour',
		        'url' => Str::slug('AKIJ Flour'),
		        'creator' => '1',
		        'slug' => Str::slug('AKIJ Flour'),
		    ],
            // 70
        	[
        		'name' => 'Drinko',
		        'url' => Str::slug('Drinko'),
		        'creator' => '1',
		        'slug' => Str::slug('Drinko'),
		    ],
            // 71
        	[
        		'name' => 'Fish Hunter',
		        'url' => Str::slug('Fish Hunter'),
		        'creator' => '1',
		        'slug' => Str::slug('Fish Hunter'),
		    ],
            // 71
        	[
        		'name' => 'Teer',
		        'url' => Str::slug('Teer'),
		        'creator' => '1',
		        'slug' => Str::slug('Teer'),
		    ],
            // 72
        	[
        		'name' => 'RFL',
		        'url' => Str::slug('RFL'),
		        'creator' => '1',
		        'slug' => Str::slug('RFL'),
		    ],
            // 73
        	[
        		'name' => 'Rokomari Food Limited',
		        'url' => Str::slug('Rokomari Food Limited'),
		        'creator' => '1',
		        'slug' => Str::slug('Rokomari Food Limited'),
		    ],
            // 74
        	[
        		'name' => 'Tradesworth Household Ltd',
		        'url' => Str::slug('Tradesworth Household Ltd'),
		        'creator' => '1',
		        'slug' => Str::slug('Tradesworth Household Ltd'),
		    ],
            // 75
        	[
        		'name' => 'Borges',
		        'url' => Str::slug('Borges'),
		        'creator' => '1',
		        'slug' => Str::slug('Borges'),
		    ],
        ]);


        Schema::enableForeignKeyConstraints();
    }
}
