<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        ProductImage::truncate();

        ProductImage::insert([
        	[
        		'product_id' => 1,
		        'image' => "uploads/product/1.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 1,
		        'image' => "uploads/product/1-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 1,
		        'image' => "uploads/product/2.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 1,
		        'image' => "uploads/product/2-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 2,
		        'image' => "uploads/product/3.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 2,
		        'image' => "uploads/product/3-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 2,
		        'image' => "uploads/product/4.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 2,
		        'image' => "uploads/product/4-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 3,
		        'image' => "uploads/product/5.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 3,
		        'image' => "uploads/product/5-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 4,
		        'image' => "uploads/product/6.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 4,
		        'image' => "uploads/product/6-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 5,
		        'image' => "uploads/product/7.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 5,
		        'image' => "uploads/product/7-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 6,
		        'image' => "uploads/product/8.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 6,
		        'image' => "uploads/product/8-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 7,
		        'image' => "uploads/product/9.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 7,
		        'image' => "uploads/product/9-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 8,
		        'image' => "uploads/product/10.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 8,
		        'image' => "uploads/product/10-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 9,
		        'image' => "uploads/product/11.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 9,
		        'image' => "uploads/product/11-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 10,
		        'image' => "uploads/product/12.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 10,
		        'image' => "uploads/product/12-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 
			[
        		'product_id' => 11,
		        'image' => "uploads/product/13.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 11,
		        'image' => "uploads/product/13-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 
			[
        		'product_id' => 12,
		        'image' => "uploads/product/14.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 12,
		        'image' => "uploads/product/14-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 
			[
        		'product_id' => 13,
		        'image' => "uploads/product/15.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 13,
		        'image' => "uploads/product/15-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 
			[
        		'product_id' => 14,
		        'image' => "uploads/product/16.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 14,
		        'image' => "uploads/product/16-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			[
        		'product_id' => 15,
		        'image' => "uploads/product/17.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 15,
		        'image' => "uploads/product/17-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			//
			[
        		'product_id' => 16,
		        'image' => "uploads/product/18.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 16,
		        'image' => "uploads/product/18-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			//
			[
        		'product_id' => 17,
		        'image' => "uploads/product/19.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 17,
		        'image' => "uploads/product/19-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			//
			[
        		'product_id' => 18,
		        'image' => "uploads/product/20.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 18,
		        'image' => "uploads/product/20-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			//
			[
        		'product_id' => 19,
		        'image' => "uploads/product/21.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 19,
		        'image' => "uploads/product/21-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			//
			[
        		'product_id' => 20,
		        'image' => "uploads/product/22.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 20,
		        'image' => "uploads/product/22-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			//
			[
        		'product_id' => 21,
		        'image' => "uploads/product/23.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 21,
		        'image' => "uploads/product/23-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			[
        		'product_id' => 21,
		        'image' => "uploads/product/24.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 21,
		        'image' => "uploads/product/24-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 
			[
        		'product_id' => 22,
		        'image' => "uploads/product/25.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 22,
		        'image' => "uploads/product/25-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 
			[
        		'product_id' => 23,
		        'image' => "uploads/product/25.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 23,
		        'image' => "uploads/product/25-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],

        ]);

        Schema::enableForeignKeyConstraints();
    }
}
