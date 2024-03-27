<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Product::truncate();

        Product::insert([
            // 1
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Smart Cabinet Black",
		        'product_url' => Str::slug('Smart Cabinet Black'),
		        'brand_id' => 72,
                'selected_categories' => "[1]",

                'short_description' => '<ul><li>Features:<br>Polypropylene material<br>Strong and durable<br>Color and Sizes are Available<br>Easy to Clean<br>Eco-friendly<br><span style="font-family: verdana,geneva,sans-serif; font-size: 10pt;">Have setting Manual</span></span><br></span></p>
                <p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important;"></li><li>Take good care of it.</li></ul>',

                'description' => '<div class="custom-page-box-border-less-div">
                <p><span style="font-family: verdana,geneva,sans-serif; font-size: 10pt;">Product Code: AG6048<br>Brand: RFL Rack<br>Dimension: L-70 x W-37 x H-133.5 cm<br>Material: PP <br>Color: Mixed (As given picture).&nbsp;&nbsp;</span></p>
                <p><span style="font-family: verdana,geneva,sans-serif; font-size: 10pt;"><span style="font-family: verdana,geneva,sans-serif; font-size: 10pt;">Note: <br>Products will not deliver as Fitting. Need to set by customers or by our service team <br>To get fitting service customer has to call 08007777777 (Toll-Free) / 09613800800<br>After being informed to the service team, the concerned person will visit the customer point for fitting the product within three working days. <br><br></span></span></span></span></span></span></p>
                <p style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important;"><span style="font-family: verdana, geneva; font-size: 10pt;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important;">*Product delivery duration may vary due to product availability in stock.<br></span></span></span></span></span></span><br></span></span></span></span></span></span><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important;">Disclaimer: The color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</span></span></span></span></span></span></p>
                </div>',
                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 6500.90,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => "Smart Cabinet Black",
                'search_keywords' => "Smart Cabinet Black",
                'meta_description' => "Smart Cabinet Black",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Smart Cabinet Black'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 2
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Cargo Box 80L",
		        'product_url' => Str::slug('Cargo Box 80L'),
		        'brand_id' => 72,
                'selected_categories' => "[1, 2]",

                'short_description' => '<ul><li><br>Material: PP<br>Dimension (LxWxH): 66x48x37.5cm<br></span><span style="font-family: verdana, geneva; font-size: 10pt;">Capacity: 80L</span><br><span style="font-family: verdana,geneva; font-size: 10pt;">Durable product</li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p><span style="font-size: 10pt; font-family: verdana,geneva;">Item Code: </span><span style="font-family: verdana, geneva; font-size: 10pt;">91506</span><br><span style="font-size: 10pt; font-family: verdana,geneva;">Brand: RFL&nbsp;Houseware<br>Group: Premium<br>Material: PP<br>Dimension (LxWxH): 66x48x37.5cm<br></span><span style="font-family: verdana, geneva; font-size: 10pt;">Capacity: 80L</span><br><span style="font-family: verdana,geneva; font-size: 10pt;">Durable product<br>Color: As given picture.</span></p><p style="box-sizing: border-box; margin: 0px 0px 10px; color: #828282; font-family: Shruti,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-align: justify;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; font-family: verdana, geneva; font-size: 10pt; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;">N.B: <br><span style="font-family: verdana,geneva,sans-serif; font-size: 10pt;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box; font-family: verdana,geneva;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><span style="font-family: verdana,geneva;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; font-family: verdana,geneva; display: inline !important; background-color: #ffffff;"><span style="font-family: verdana,geneva,sans-serif;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><strong><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space"> <span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;">Product delivery duration may vary due to product availability in stock.</span></span></span></strong></span></span></span></span></span></span></span></span></span></span></span></span><br></span></span></p><p style="box-sizing: border-box; margin: 0px 0px 10px; color: #828282; font-family: Shruti,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-align: justify;"><span style="box-sizing: border-box; font-family: georgia, palatino;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; font-family: verdana, geneva; font-size: 10pt; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;">Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</span></span></span></span></p><p><span style="box-sizing: border-box; font-size: 10pt; font-family: verdana, geneva;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: none 0px; vertical-align: baseline; background: none 0% 0% repeat scroll transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: none 0px; vertical-align: baseline; color: #ff0000; background: none 0% 0% repeat scroll transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: none 0px; vertical-align: baseline; color: #ff0000; background: none 0% 0% repeat scroll transparent;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;">&nbsp;</span></span></span></span></span></span></span></span></span></span></span></p><p>&nbsp;</p><div id="gtx-trans" style="position: absolute; left: 113px; top: 74.4201px;"><div class="gtx-trans-icon">&nbsp;</div></div><div id="gtx-trans" style="position: absolute; left: 113px; top: 74.4201px;"><div class="gtx-trans-icon">&nbsp;</div></div></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 1220.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => "Cargo Box 80L",
                'search_keywords' => "Cargo Box 80L",
                'meta_description' => "Cargo Box 80L",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Cargo Box 80L'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],


            // 3
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => '5.1" Crazy Soup Bowl Snowdrop',
		        'product_url' => Str::slug('5.1" Crazy Soup Bowl Snowdrop'),
		        'brand_id' => 72,
                'selected_categories' => "[1, 2, 3]",

                'short_description' => '<ul><li><p><span style="font-family: verdana, geneva; font-size: 10pt;">5.1" Crazy Soup Bowl Snowdrop<br>Item Code: 859842<br>Brand: Italiano<br>Size: 5.1"<br>Material: Melamine<br>Product Type: Bowl<br>Color: Mixed (As given picture).</span></p></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p><span style="font-family: verdana, geneva; font-size: 10pt;">5.1" Crazy Soup Bowl Snowdrop<br>Item Code: 859842<br>Brand: Italiano<br>Size: 5.1"<br>Material: Melamine<br>Product Type: Bowl<br>Color: Mixed (As given picture).</span></p><div id="description" class="full-description tab-pane fade active in"><div class="custom-page-box-border-less-div cpbbld"><p style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><strong style="box-sizing: border-box; font-weight: bold; color: #e36c0a; font-family: verdana, geneva, sans-serif; font-size: 13.3333px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><strong>Note:<br></strong>*Product delivery duration may vary due to product availability in stock.</span></span></span></strong></span></p><p style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><strong style="box-sizing: border-box; font-weight: bold; color: #e36c0a; font-family: verdana, geneva, sans-serif; font-size: 13.3333px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;">&nbsp;*Minimum order amount is Tk. 250 (<strong>DPLS</strong> products only). To add other products of <strong>DPLS</strong> to your cart, please <a href="https://www.othoba.com/dpls"><strong>click here</strong></a></span></span></span></strong></span></p><p style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><strong style="box-sizing: border-box; font-weight: bold; color: #e36c0a; font-family: verdana, geneva, sans-serif; font-size: 13.3333px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><strong><span style="font-size: 10pt; font-family: verdana,geneva;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span style="font-family: verdana, geneva, sans-serif;">Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</span> </span></span></span></span></strong></span></span></span></strong></span></p></div></div><p style="box-sizing: border-box; margin: 0px 0px 10px; color: #828282; font-family: Shruti,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: #ffffff;"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;">&nbsp;</span></span></span></span></span></span></span></span></span></span></span></p></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 70.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => '5.1" Crazy Soup Bowl Snowdrop',
                'search_keywords' => '5.1" Crazy Soup Bowl Snowdrop',
                'meta_description' => '5.1" Crazy Soup Bowl Snowdrop',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('5.1" Crazy Soup Bowl Snowdrop'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 4
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'Farm Egg Loose',
		        'product_url' => Str::slug('Farm Egg Loose'),
		        'brand_id' => 3,
                'selected_categories' => "[4, 5, 6]",

                'short_description' => '<ul><li><p><span style="font-family: verdana, geneva; font-size: 10pt;">Farm Egg Loose<br>Item Code: 859842<br>Brand: Italiano<br>Size: 5.1"<br>Material: Melamine<br>Product Type: Bowl<br>Color: Mixed (As given picture).</span></p></li></ul>',

                'description' => '<div class="full-description" itemprop="description"><p><span style="font-family: verdana,geneva,sans-serif;"><span style="font-size: 10pt;">Farm Egg (ডিম)<br>Item code: 70001<br>Unit: Per piece<br></span></span></p><p style="text-align: justify;"><span style="font-family: verdana, geneva;"><strong><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-size: 10pt; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-size: 14.6667px; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space">Product Delivery Conditions:</span></span></span></span></span></strong></span></p><ul><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>To add more items of <strong>Daily Shopping</strong> to your cart, please <strong><a href="https://www.othoba.com/daily-shopping" target="_blank" rel="noopener"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space">Click here.</span></span></span></span></a></strong></strong></span><span style="font-size: 10pt; font-family: verdana, geneva;"><br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>Return/cancellation</strong>: No change will be applicable which are already delivered to customer. If product quality or quantity problem found then customer can return/cancel their order on delivery time with presence of delivery person.<br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Note:</strong> Product delivery duration may vary due to product availability in stock.</span></span></span></span></span></li></ul></ul><p>&nbsp;</p><ul><li style="text-align: justify; margin-bottom: 30px; list-style-type: none;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Out of coverage area: </strong>Dhaka Cantonment Area ( ECB Chattar, Vashantec, Matikata), Uttara Sector 18, Khilkhet, Nikunjo, Sher E bangla Agriculture university, Sher-E-Bangla Nagar, Dhaka.</span></span></span></span></span></li></ul><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Rajshahi City Coverage Area: </strong>Rajshahi Sadar, Bowalia Thana</span></span></span></span></span></li></ul></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 12.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'Farm Egg Loose',
                'search_keywords' => 'Farm Egg Loose',
                'meta_description' => 'Farm Egg Loose',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Farm Egg Loose'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 5
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'Pusti Soybean Oil (সয়াবিন তেল) 5 Litre',
		        'product_url' => Str::slug('Pusti Soybean Oil (সয়াবিন তেল) 5 Litre'),
		        'brand_id' => 3,
                'selected_categories' => "[4, 5, 7]",

                'short_description' => '<ul><li><br><p><span style="font-family: verdana, geneva, sans-serif; font-size: 10pt;">Pusti Soybean Oil (সয়াবিন তেল) 5 Litre </span><br><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">Item code: </span><span style="font-family: verdana,geneva,sans-serif; font-size: 10pt;">3500000182 </span><br><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">Net Weight: 5 Litre </span><br></p></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p><span style="font-size: 11pt; font-family: verdana,geneva;"><strong>Product details:</strong></span></p><p><span style="font-family: verdana, geneva, sans-serif; font-size: 10pt;">Pusti Soybean Oil (সয়াবিন তেল) 5 Litre </span><br><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">Item code: </span><span style="font-family: verdana,geneva,sans-serif; font-size: 10pt;">3500000182 </span><br><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">Net Weight: 5 Litre </span><br><br></p><p style="text-align: justify;"><span style="font-family: verdana, geneva;"><strong><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-size: 10pt; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-size: 14.6667px; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space">Product Delivery Conditions:</span></span></span></span></span></strong></span></p><ul><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>To add more items of <strong>Daily Shopping</strong> to your cart, please <strong><a href="https://www.othoba.com/daily-shopping" target="_blank" rel="noopener"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space">Click here.</span></span></span></span></a></strong></strong></span><span style="font-size: 10pt; font-family: verdana, geneva;"><br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>Return/cancellation</strong>: No change will be applicable which are already delivered to customer. If product quality or quantity problem found then customer can return/cancel their order on delivery time with presence of delivery person.<br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Note:</strong> Product delivery duration may vary due to product availability in stock.</span></span></span></span></span></li></ul></ul><p>&nbsp;</p><p>&nbsp;</p><ul><li style="text-align: justify; margin-bottom: 30px; list-style-type: none;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Out of coverage area: </strong>Dhaka Cantonment Area ( ECB Chattar, Vashantec, Matikata), Uttara Sector 18, Khilkhet, Nikunjo, Sher E bangla Agriculture university, Sher-E-Bangla Nagar, Dhaka.</span></span></span></span></span></li></ul><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Rajshahi City Coverage Area: </strong>Rajshahi Sadar, Bowalia Thana</span></span></span></span></span></li></ul></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 800.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'Pusti Soybean Oil (সয়াবিন তেল) 5 Litre',
                'search_keywords' => 'Pusti Soybean Oil (সয়াবিন তেল) 5 Litre',
                'meta_description' => 'Pusti Soybean Oil (সয়াবিন তেল) 5 Litre',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Pusti Soybean Oil (সয়াবিন তেল) 5 Litre'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],
            
            // 6
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'PRAN Miniket 25kg Bag',
		        'product_url' => Str::slug('PRAN Miniket 25kg Bag'),
		        'brand_id' => 36,
                'selected_categories' => "[4, 5, 8]",

                'short_description' => '<ul><li><br><p><span style="font-family: verdana, geneva; font-size: 10pt;">PRAN Miniket 25kg Bag<br>Brand: Bango Millers</span></p><p><span style="font-family: verdana, geneva; font-size: 10pt;">Item Code: 3500000001</span><br><span style="font-family: verdana, geneva; font-size: 10pt;">Net Weight: 25kg</span></p></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p><span style="font-family: verdana, geneva; font-size: 10pt;">PRAN Miniket 25kg Bag<br>Brand: Bango Millers</span></p><p><span style="font-family: verdana, geneva; font-size: 10pt;">Item Code: 3500000001</span><br><span style="font-family: verdana, geneva; font-size: 10pt;">Net Weight: 25kg</span></p><p style="box-sizing: border-box; margin: 0px 0px 10px; color: #828282; font-family: Shruti,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-align: justify;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; font-family: verdana, geneva; font-size: 10pt; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;"><span style="font-size: 10pt; font-family: verdana, geneva; color: #ff6600;"><span class="Apple-converted-space"><strong><span style="font-family: verdana, geneva; font-size: 10pt;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;"><strong>*</strong>20% Advance payment needs to be paid in advance via&nbsp;bkash for cash on delivery. </span></span></span></strong></span></span></span></span></p><p style="box-sizing: border-box; margin: 0px 0px 10px; color: #828282; font-family: Shruti,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-align: justify;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; font-family: verdana, geneva; font-size: 10pt; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;">N.B: <span style="font-family: verdana,geneva,sans-serif; font-size: 10pt;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box; font-family: verdana,geneva;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><span style="font-family: verdana,geneva;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; font-family: verdana,geneva; display: inline !important; background-color: #ffffff;"><span style="font-family: verdana,geneva,sans-serif;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><strong><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;">Product delivery duration may vary due to product availability in stock.</span></span></span></strong></span></span></span></span></span></span></span></span></span></span></span></span><br></span></span></p><p style="box-sizing: border-box; margin: 0px 0px 10px; color: #828282; font-family: Shruti,sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-align: justify;"><span style="box-sizing: border-box; font-family: georgia, palatino;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; font-family: verdana, geneva; font-size: 10pt; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;">Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</span></span></span></span></p><div id="gtx-trans" style="position: absolute; left: 45px; top: 25.4201px;"><div class="gtx-trans-icon">&nbsp;</div></div><p><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Out of coverage area: </strong>Dhaka Cantonment Area ( ECB Chattar, Vashantec, Matikata), Uttara Sector 18, Khilkhet, Nikunjo, Sher E bangla Agriculture university, Sher-E-Bangla Nagar, Dhaka.</span></span></span></span></span></p><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Rajshahi City Coverage Area: </strong>Rajshahi Sadar, Bowalia Thana</span></span></span></span></span></li></ul></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 2047.50,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'PRAN Miniket 25kg Bag',
                'search_keywords' => 'PRAN Miniket 25kg Bag',
                'meta_description' => 'PRAN Miniket 25kg Bag',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('PRAN Miniket 25kg Bag'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 7
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'Pushti Atta 2kg',
		        'product_url' => Str::slug('Pushti Atta 2kg'),
		        'brand_id' => 36,
                'selected_categories' => "[4, 5, 9]",

                'short_description' => '<ul><li><br><p style="text-align: justify;"><span style="font-family: verdana, geneva, sans-serif;"><span style="font-size: 10pt;">Pushti Atta 2kg<br>Item code: 3500000312<br>Brand: Pushti <br>Product type: Atta <br>Net weight: 2kg</span></span></p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p style="text-align: justify;"><span style="font-family: verdana, geneva, sans-serif;"><span style="font-size: 10pt;">Pushti Atta 2kg<br>Item code: 3500000312<br>Brand: Pushti <br>Product type: Atta <br>Net weight: 2kg</span></span></p><p style="text-align: justify;"><span style="font-family: verdana, geneva;"><strong><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-size: 10pt; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-size: 14.6667px; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space">Product Delivery Conditions:</span></span></span></span></span></strong></span></p><ul><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>To add more items of <strong>Daily Shopping</strong> to your cart, please <strong><a href="https://www.othoba.com/daily-shopping" target="_blank" rel="noopener"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space">Click here.</span></span></span></span></a></strong></strong></span><span style="font-size: 10pt; font-family: verdana, geneva;"><br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>Return/cancellation</strong>: No change will be applicable which are already delivered to customer. If product quality or quantity problem found then customer can return/cancel their order on delivery time with presence of delivery person.<br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Note:</strong> Product delivery duration may vary due to product availability in stock.</span></span></span></span></span></li></ul></ul><p><br><br></p><p>&nbsp;</p><ul><li style="text-align: justify; margin-bottom: 30px; list-style-type: none;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Out of coverage area: </strong>Dhaka Cantonment Area ( ECB Chattar, Vashantec, Matikata), Uttara Sector 18, Khilkhet, Nikunjo, Sher E bangla Agriculture university, Sher-E-Bangla Nagar, Dhaka.</span></span></span></span></span></li></ul></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 130.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'Pushti Atta 2kg',
                'search_keywords' => 'Pushti Atta 2kg',
                'meta_description' => 'Pushti Atta 2kg',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Pushti Atta 2kg'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 8
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'Radhuni Mejbani Beef Masala 68gm',
		        'product_url' => Str::slug('Radhuni Mejbani Beef Masala 68gm'),
		        'brand_id' => 37,
                'selected_categories' => "[4, 5, 10]",

                'short_description' => '<ul><li><br><p><span style="font-size: 10pt;">Radhuni Mejbani Beef Masala 68gm</span><br><span style="font-size: 10pt;"><span style="font-family: verdana, geneva;">Item Code: </span><span class="ty-control-group__item cm-reload-38384" id="product_code_38384">5000000497</span></span><br><span style="font-family: verdana, geneva; font-size: 10pt;">Net Weight: 68 gm</span><br><span style="font-size: 10pt; font-family: verdana,geneva;">Brand:&nbsp;Radhuni </span></p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p><span style="font-size: 10pt;">Radhuni Mejbani Beef Masala 68gm</span><br><span style="font-size: 10pt;"><span style="font-family: verdana, geneva;">Item Code: </span><span class="ty-control-group__item cm-reload-38384" id="product_code_38384">5000000497</span></span><br><span style="font-family: verdana, geneva; font-size: 10pt;">Net Weight: 68 gm</span><br><span style="font-size: 10pt; font-family: verdana,geneva;">Brand:&nbsp;Radhuni </span></p><p style="text-align: justify;"><span style="font-family: verdana, geneva;"><strong><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-size: 10pt; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-size: 14.6667px; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space">Product Delivery Conditions:</span></span></span></span></span></strong></span></p><ul><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>To add more items of <strong>Daily Shopping</strong> to your cart, please <strong><a href="https://www.othoba.com/daily-shopping" target="_blank"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space">Click here.</span></span></span></span></a></strong></strong></span><span style="font-size: 10pt; font-family: verdana, geneva;"><br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>Return/cancellation</strong>: No change will be applicable which are already delivered to customer. If product quality or quantity problem found then customer can return/cancel their order on delivery time with presence of delivery person.<br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Note:</strong> Product delivery duration may vary due to product availability in stock.</span></span></span></span></span></li></ul></ul><p></p><li style="text-align: justify; margin-bottom: 30px; list-style-type: none;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Out of coverage area: </strong>Dhaka Cantonment Area ( ECB Chattar, Vashantec, Matikata), Uttara Sector 18, Khilkhet, Nikunjo, Sher E bangla Agriculture university, Sher-E-Bangla Nagar, Dhaka.</span></span></span></span></span></li><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Rajshahi City Coverage Area: </strong>Rajshahi Sadar, Bowalia Thana</span></span></span></span></span></li></ul></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 100.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'Radhuni Mejbani Beef Masala 68gm',
                'search_keywords' => 'Radhuni Mejbani Beef Masala 68gm',
                'meta_description' => 'Radhuni Mejbani Beef Masala 68gm',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Radhuni Mejbani Beef Masala 68gm'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 9
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'JOYA Belt Style 8 Pads',
		        'product_url' => Str::slug('JOYA Belt Style 8 Pads'),
		        'brand_id' => 39,
                'selected_categories' => "[4, 5, 11]",

                'short_description' => '<ul><li><br><p><span style="font-size: 10pt;">JOYA Belt Style 8 Pads</span>Special Pads</p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <ul><li>JOYA Belt Style 8 Pads</li></ul><p><span style="font-family: verdana,geneva,sans-serif; font-size: 10pt;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box; font-family: verdana,geneva;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><span style="font-family: verdana,geneva;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; font-family: verdana,geneva; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;"><span style="font-family: verdana,geneva,sans-serif;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><strong><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;">Note: </span><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;">Product delivery duration may vary due to product availability in stock.</span></span></span></strong></span></span></span></span></span></span></span></span></span></span></span></span></span></p><p style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana,geneva;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span style="font-family: verdana, geneva, sans-serif;">Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</span> </span></span></span></span></p><p><span style="font-family: verdana, geneva; font-size: 10pt; color: #ff0000;"><strong>Note:</strong> </span><br><span style="font-family: verdana, geneva; font-size: 10pt; color: #ff0000;">For Outside Dhaka orders need to take full advance payment.</span></p></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 90.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'JOYA Belt Style 8 Pads',
                'search_keywords' => 'JOYA Belt Style 8 Pads',
                'meta_description' => 'JOYA Belt Style 8 Pads',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('JOYA Belt Style 8 Pads'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 10
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'Lentil (Moshur Dal) -500 gm',
		        'product_url' => Str::slug('Lentil (Moshur Dal) -500 gm'),
		        'brand_id' => 73,
                'selected_categories' => "[4, 5, 12]",

                'short_description' => '<ul><li><br><p><span style="font-size: 10pt;">Lentil (Moshur Dal) -500 gm</span>Special Pads</p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p style="text-align: left;"><span style="font-size: 10pt; font-family: verdana,geneva;">Lentil (Moshur Dal) 500 gm<br>Brand: Rokomari Food<br>Weight: 500 gm</span></p><p class="tw-data-text tw-text-large XcVN5d tw-ta" dir="ltr" data-placeholder="Translation"><span lang="en">Lentils are rich in dietary fiber. As a result, it helps in digestion. It is also an ideal food for preventing constipation. If you want to lose extra weight, you can reduce the amount of rice and eat pulses regularly instead. It h</span>as an amazing taste. It can be a delicious ingredient of your vegetable, or salad.&nbsp;</p><h4>Why eat <span style="font-size: 10pt; font-family: verdana,geneva;">Moshur </span>Dal?</h4><ul><li>It consists of more than 25% protein. It can be a good substitute for protein in meat.</li><li>It is an excellent natural source of minerals, iron, calcium, potassium, magnesium, and zinc.</li><li>Some of these ingredients help to naturally reduce blood pressure.</li><li>It also contains selenium. Selenium strengthens the immune response of the body.&nbsp;</li></ul><p style="box-sizing: border-box; margin: 0px 0px 10px; color: #828282; font-family: Shruti, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;"><span style="box-sizing: border-box; font-family: verdana, geneva, sans-serif; font-size: 10pt;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: #ffffff; display: inline !important;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: none 0px; vertical-align: baseline; background: none 0% 0% repeat scroll transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: none 0px; vertical-align: baseline; color: #ff0000; background: none 0% 0% repeat scroll transparent;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: #ffffff; display: inline !important;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; background-color: #ffffff; display: inline !important;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;"><span style="box-sizing: border-box; color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; background-color: #ffffff; display: inline !important;"><strong style="box-sizing: border-box; font-weight: bold;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; display: inline !important;">Note:&nbsp;</span><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; display: inline !important;">Product delivery duration may vary due to product availability in stock.</span></span></strong></span></span></span></span></span></span></span></span></span></span></p><p style="box-sizing: border-box; margin: 0px 0px 10px; color: #828282; font-family: Shruti, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;"><span style="box-sizing: border-box; font-family: verdana, geneva, sans-serif; font-size: 10pt;"><span style="box-sizing: border-box; color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.5714px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; background-color: #ffffff; display: inline !important;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: #ffffff; display: inline !important;">Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</span></span></span></p><p>&nbsp;</p><p><br><br></p><p>&nbsp;</p></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 90.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'Lentil (Moshur Dal) -500 gm',
                'search_keywords' => 'Lentil (Moshur Dal) -500 gm',
                'meta_description' => 'Lentil (Moshur Dal) -500 gm',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Lentil (Moshur Dal) -500 gm'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 11
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'ACI Salt 1kg',
		        'product_url' => Str::slug('ACI Salt 1kg'),
		        'brand_id' => 24,
                'selected_categories' => "[4, 5, 13]",

                'short_description' => '<ul><li><br><p><span style="font-family: verdana,geneva; font-size: 10pt;">ACI Salt 1kg</span><br><span style="font-size: 10pt; font-family: verdana,geneva;">Net Weight: 1kg<br>Item code: 3500000029</span><br><span style="font-size: 10pt; font-family: verdana,geneva;">Brand: ACI LIMITED</span></p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p></p><p><span style="font-family: verdana,geneva; font-size: 10pt;">ACI Salt 1kg</span><br><span style="font-size: 10pt; font-family: verdana,geneva;">Net Weight: 1kg<br>Item code: 3500000029</span><br><span style="font-size: 10pt; font-family: verdana,geneva;">Brand: ACI LIMITED</span></p><div id="description" class="full-description tab-pane fade active in"><div class="custom-page-box-border-less-div cpbbld"><p style="text-align: justify;"><span style="font-family: verdana, geneva;"><strong><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-size: 10pt; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-size: 14.6667px; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space">Product Delivery Conditions:</span></span></span></span></span></strong></span></p><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>To add more items of <strong>Daily Shopping</strong> to your cart, please <strong><a href="https://www.othoba.com/daily-shopping" target="_blank"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space">Click here.</span></span></span></span></a></strong></strong></span><span style="font-size: 10pt; font-family: verdana, geneva;"><br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>Return/cancellation</strong>: No change will be applicable which are already delivered to customer. If product quality or quantity problem found then customer can return/cancel their order on delivery time with presence of delivery person.<br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Note:</strong> Product delivery duration may vary due to product availability in stock.</span></span></span></span></span></li></ul></div></div><p></p><li style="text-align: justify; margin-bottom: 30px; list-style-type: none;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Out of coverage area: </strong>Dhaka Cantonment Area ( ECB Chattar, Vashantec, Matikata), Uttara Sector 18, Khilkhet, Nikunjo, Sher E bangla Agriculture university, Sher-E-Bangla Nagar, Dhaka.</span></span></span></span></span></li><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Rajshahi City Coverage Area: </strong>Rajshahi Sadar, Bowalia Thana</span></span></span></span></span></li></ul></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 50.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'ACI Salt 1kg',
                'search_keywords' => 'ACI Salt 1kg',
                'meta_description' => 'ACI Salt 1kg',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('ACI Salt 1kg'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 12
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'Rok Dishwashing Liquid 500 ML',
		        'product_url' => Str::slug('Rok Dishwashing Liquid 500 ML'),
		        'brand_id' => 74,
                'selected_categories' => "[4, 5, 14]",

                'short_description' => '<ul><li><br><p style="text-align: left;">Rok Dishwashing Liquid 500 ML<br>Brand: Rok<br>Net weight: 500 ML<br>Easy clean formula which has a superior fragrance. PH balanced so It is soft on hands. It can safely be used to clean expensive crockery without damage<br>Color: (Mixed) As given picture.</p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p style="text-align: left;">Rok Dishwashing Liquid 500 ML<br>Brand: Rok<br>Net weight: 500 ML<br>Easy clean formula which has a superior fragrance. PH balanced so It is soft on hands. It can safely be used to clean expensive crockery without damage<br>Color: (Mixed) As given picture.</p><p style="box-sizing: border-box; margin: 0px 0px 10px; color: #828282; font-family: Shruti, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;"><span style="box-sizing: border-box; font-family: verdana, geneva, sans-serif; font-size: 10pt;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: #ffffff; display: inline !important;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: none 0px; vertical-align: baseline; background: none 0% 0% repeat scroll transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: none 0px; vertical-align: baseline; color: #ff0000; background: none 0% 0% repeat scroll transparent;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: #ffffff; display: inline !important;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; background-color: #ffffff; display: inline !important;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;"><span style="box-sizing: border-box; color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; background-color: #ffffff; display: inline !important;"><strong style="box-sizing: border-box; font-weight: bold;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; display: inline !important;">Note:&nbsp;</span><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; display: inline !important;">Product delivery duration may vary due to product availability in stock.</span></span></strong></span></span></span></span></span></span></span></span></span></span></p><p style="box-sizing: border-box; margin: 0px 0px 10px; color: #828282; font-family: Shruti, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; text-align: justify;"><span style="box-sizing: border-box; font-family: verdana, geneva, sans-serif; font-size: 10pt;"><span style="box-sizing: border-box; color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.5714px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; background-color: #ffffff; display: inline !important;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; float: none; background-color: #ffffff; display: inline !important;">Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</span></span></span><p><p>&nbsp;</p><p><br><br></p><p>&nbsp;</p></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 135.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'Rok Dishwashing Liquid 500 ML',
                'search_keywords' => 'Rok Dishwashing Liquid 500 ML',
                'meta_description' => 'Rok Dishwashing Liquid 500 ML',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Rok Dishwashing Liquid 500 ML'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 13
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'Daily Shopping Isobgul Bhushi (Bran) 50gm',
		        'product_url' => Str::slug('Daily Shopping Isobgul Bhushi (Bran) 50gm'),
		        'brand_id' => 9,
                'selected_categories' => "[4, 5, 15]",

                'short_description' => '<ul><li><br><p><span style="font-family: verdana,geneva,sans-serif;"><span style="font-size: 10pt;">Daily Shopping Isobgul Bhushi (Bran) 50gm<br>Item code: 3000000568<br>Net weight: 50gm<br>Product type: Isobgul Bhushi<br></span></span></p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p><span style="font-family: verdana,geneva,sans-serif;"><span style="font-size: 10pt;">Daily Shopping Isobgul Bhushi (Bran) 50gm<br>Item code: 3000000568<br>Net weight: 50gm<br>Product type: Isobgul Bhushi<br></span></span></p><p style="text-align: justify;"><span style="font-family: verdana, geneva;"><strong><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-size: 10pt; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-size: 14.6667px; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space">Product Delivery Conditions:</span></span></span></span></span></strong></span></p><ul><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>To add more items of <strong>Daily Shopping</strong> to your cart, please <strong><a href="https://www.othoba.com/daily-shopping" target="_blank"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space">Click here.</span></span></span></span></a></strong></strong></span><span style="font-size: 10pt; font-family: verdana, geneva;"><br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>Return/cancellation</strong>: No change will be applicable which are already delivered to customer. If product quality or quantity problem found then customer can return/cancel their order on delivery time with presence of delivery person.<br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Note:</strong> Product delivery duration may vary due to product availability in stock.</span></span></span></span><span></li></ul></ul><p><br><br></p><p></p><li style="text-align: justify; margin-bottom: 30px; list-style-type: none;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Out of coverage area: </strong>Dhaka Cantonment Area ( ECB Chattar, Vashantec, Matikata), Uttara Sector 18, Khilkhet, Nikunjo, Sher E bangla Agriculture university, Sher-E-Bangla Nagar, Dhaka.</span></span></span></span></span></li><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Rajshahi City Coverage Area: </strong>Rajshahi Sadar, Bowalia Thana</span></span></span></span></span></li></ul></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 170.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'Daily Shopping Isobgul Bhushi (Bran) 50gm',
                'search_keywords' => 'Daily Shopping Isobgul Bhushi (Bran) 50gm',
                'meta_description' => 'Daily Shopping Isobgul Bhushi (Bran) 50gm',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Daily Shopping Isobgul Bhushi (Bran) 50gm'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 14
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'Borges Apple Cider Vinegar 500ml',
		        'product_url' => Str::slug('Borges Apple Cider Vinegar 500ml'),
		        'brand_id' => 75,
                'selected_categories' => "[4, 5, 16]",

                'short_description' => '<ul><li><br><p><span style="font-family: verdana,geneva,sans-serif;"><span style="font-size: 10pt;">Borges Apple Cider Vinegar 500ml<br>Item code: 3000000568<br>Net weight: 50gm<br>Product type: Isobgul Bhushi<br></span></span></p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p><span style="font-size: 11pt; font-family: verdana, geneva, sans-serif;"><strong>Product details:<br></strong></span><span style="font-family: verdana, geneva, sans-serif; font-size: 10pt;">Borges Apple Cider Vinegar 500ml<br>Brand: Mister Borges<br>Net weight: 500ml<br></span><p><p style="text-align: justify;"><span style="color: #e36c0a; font-family: verdana,geneva,sans-serif; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><strong><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space">Note: Product delivery duration may vary due to product availability in stock.<br></span></span></strong></span></span>Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</span></p></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 325.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'Borges Apple Cider Vinegar 500ml',
                'search_keywords' => 'Borges Apple Cider Vinegar 500ml',
                'meta_description' => 'Borges Apple Cider Vinegar 500ml',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Borges Apple Cider Vinegar 500ml'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 15
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'Jhatpot Deshi Paratha Family Pack (Premium) 20pc 1300g',
		        'product_url' => Str::slug('Jhatpot Deshi Paratha Family Pack (Premium) 20pc 1300g'),
		        'brand_id' => 43,
                'selected_categories' => "[17]",

                'short_description' => '<ul><li><br><p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">Jhatpot Paratha Premium 20pc</span><br><span style="font-family: verdana, geneva; font-size: 10pt;">Item code: 5500001099</span><br><span style="font-family: verdana, geneva; font-size: 10pt;">Net Weight: 1300g</span></p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p style="text-align: justify;"><span style="font-family: verdana, geneva; font-size: 10pt;">Jhatpot Paratha Premium 20pc</span><br><span style="font-family: verdana, geneva; font-size: 10pt;">Item code: 5500001099</span><br><span style="font-family: verdana, geneva; font-size: 10pt;">Net Weight: 1300g</span></p><p style="text-align: justify;"><strong><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-size: 10pt; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-size: 14.6667px; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space">Product Delivery Conditions:</span></span></span></span></span></strong></p><ul><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>To add more items of <strong>Daily Shopping</strong> to your cart, please <strong><a href="https://www.othoba.com/daily-shopping" target="_blank" rel="noopener"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space">Click here.</span></span></span></span></a></strong></strong></span><span style="font-size: 10pt; font-family: verdana, geneva;"><br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>Return/cancellation</strong>: No change will be applicable which are already delivered to customer. If product quality or quantity problem found then customer can return/cancel their order on delivery time with presence of delivery person.<br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Note:</strong> Product delivery duration may vary due to product availability in stock.</span></span></span></span></span></li></ul></ul><p><br><br></p><p>&nbsp;</p><ul><li style="text-align: justify; margin-bottom: 30px; list-style-type: none;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Out of coverage area: </strong>Dhaka Cantonment Area ( ECB Chattar, Vashantec, Matikata), Uttara Sector 18, Khilkhet, Nikunjo, Sher E bangla Agriculture university, Sher-E-Bangla Nagar, Dhaka.</span></span></span></span></span></li></ul><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Rajshahi City Coverage Area: </strong>Rajshahi Sadar, Bowalia Thana</span></span></span></span></span></li></ul></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 320.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'Jhatpot Deshi Paratha Family Pack (Premium) 20pc 1300g',
                'search_keywords' => 'Jhatpot Deshi Paratha Family Pack (Premium) 20pc 1300g',
                'meta_description' => 'Jhatpot Deshi Paratha Family Pack (Premium) 20pc 1300g',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Jhatpot Deshi Paratha Family Pack (Premium) 20pc 1300g'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 16
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'Mi ABC Instant Noodles Chicken Single pack 70g',
		        'product_url' => Str::slug('Mi ABC Instant Noodles Chicken Single pack 70g'),
		        'brand_id' => 43,
                'selected_categories' => "[17, 27]",

                'short_description' => '<ul><li><br><p>Mi ABC Instant Noodles Chicken Single pack 70g&nbsp;<br>Item Coad:8992388144013<br>Brand:MI<br>Country of Origin: Indonesia<br>Net Weight: 70g&nbsp;<br>Color: (Mixed) As given picture.</p><p>ABC INSTANT NOODLES CHICKEN SINGLE 70G AND FIVE PACK 350G &nbsp;is a unique Indonesian flavored noodle because of sweet soy and sweet chili sauce and other spices that gives a unique sweet and spicy flavor which brings out the umami flavor.</p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p>Mi ABC Instant Noodles Chicken Single pack 70g&nbsp;<br>Item Coad:8992388144013<br>Brand:MI<br>Country of Origin: Indonesia<br>Net Weight: 70g&nbsp;<br>Color: (Mixed) As given picture.</p><p>ABC INSTANT NOODLES CHICKEN SINGLE 70G AND FIVE PACK 350G &nbsp;is a unique Indonesian flavored noodle because of sweet soy and sweet chili sauce and other spices that gives a unique sweet and spicy flavor which brings out the umami flavor.</p><p><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;">Note: </span></span></span><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;">P</span></span></span><strong style="box-sizing: border-box; font-weight: bold; color: #e36c0a; font-family: verdana, geneva, sans-serif; font-size: 13.3333px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;">roduct delivery duration may vary due to product availability in stock.<br></span></span></span></strong></span><span style="font-family: verdana,geneva,sans-serif;"><span style="font-size: 10pt;"><span style="font-family: verdana,geneva;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; font-family: verdana, geneva; font-size: 10pt; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;">Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</span></span></span></span></span></span></span></span></span></p></div> product quality or quantity problem found then customer can return/cancel their order on delivery time with presence of delivery person.<br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Note:</strong> Product delivery duration may vary due to product availability in stock.</span></span></span></span></span></li></ul></ul><p><br><br></p><p>&nbsp;</p><ul><li style="text-align: justify; margin-bottom: 30px; list-style-type: none;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Out of coverage area: </strong>Dhaka Cantonment Area ( ECB Chattar, Vashantec, Matikata), Uttara Sector 18, Khilkhet, Nikunjo, Sher E bangla Agriculture university, Sher-E-Bangla Nagar, Dhaka.</span></span></span></span></span></li></ul><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Rajshahi City Coverage Area: </strong>Rajshahi Sadar, Bowalia Thana</span></span></span></span></span></li></ul></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 156.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'Mi ABC Instant Noodles Chicken Single pack 70g',
                'search_keywords' => 'Mi ABC Instant Noodles Chicken Single pack 70g',
                'meta_description' => 'Mi ABC Instant Noodles Chicken Single pack 70g',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Mi ABC Instant Noodles Chicken Single pack 70g'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 17
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'PRAN Tomato Sauce 340gm',
		        'product_url' => Str::slug('PRAN Tomato Sauce 340gm'),
		        'brand_id' => 3,
                'selected_categories' => "[17, 28]",

                'short_description' => '<ul><li><br><p><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="font-size: 11pt; font-family: verdana,geneva;"><strong>Product details:</strong></span><br><br></span><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;">PRAN Tomato&nbsp;Sauce 340gm<br>Item code: 5000000030<br>Net weight: 340gm<br>Color: As given picture.</span></p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="font-size: 11pt; font-family: verdana,geneva;"><strong>Product details:</strong></span><br><br></span><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;">PRAN Tomato&nbsp;Sauce 340gm<br>Item code: 5000000030<br>Net weight: 340gm<br>Color: As given picture.</span></p><p style="text-align: justify;"><span style="font-family: verdana, geneva;"><strong><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-size: 10pt; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-size: 14.6667px; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space">Product Delivery Conditions:</span></span></span></span></span></strong></span></p><ul><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>To add more items of <strong>Daily Shopping</strong> to your cart, please <strong><a href="https://www.othoba.com/daily-shopping" target="_blank" rel="noopener"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space">Click here.</span></span></span></span></a></strong></strong></span><span style="font-size: 10pt; font-family: verdana, geneva;"><br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>Return/cancellation</strong>: No change will be applicable which are already delivered to customer. If product quality or quantity problem found then customer can return/cancel their order on delivery time with presence of delivery person.<br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Note:</strong> Product delivery duration may vary due to product availability in stock.</span></span></span></span></span></li></ul></ul><p><br><br></p><p>&nbsp;</p><li style="text-align: justify; margin-bottom: 30px; list-style-type: none;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Out of coverage area: </strong>Dhaka Cantonment Area ( ECB Chattar, Vashantec, Matikata), Uttara Sector 18, Khilkhet, Nikunjo, Sher E bangla Agriculture university, Sher-E-Bangla Nagar, Dhaka.</span></span></span></span></span></li><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Rajshahi City Coverage Area: </strong>Rajshahi Sadar, Bowalia Thana</span></span></span></span></span></li></ul></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 100.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'PRAN Tomato Sauce 340gm',
                'search_keywords' => 'PRAN Tomato Sauce 340gm',
                'meta_description' => 'PRAN Tomato Sauce 340gm',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('PRAN Tomato Sauce 340gm'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 18
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'Captain Granola (Cocoa Hazelnut) 250g Pouch',
		        'product_url' => Str::slug('Captain Granola (Cocoa Hazelnut) 250g Pouch'),
		        'brand_id' => 36,
                'selected_categories' => "[17, 29]",

                'short_description' => '<ul><li><br><p style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;">Captain Granola (Cocoa Hazelnut) 250g Pouch<br>Item code: CGCH220<br>Brand: Captain Oats<br>Net weight: 250g Pouch</span></p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;">Captain Granola (Cocoa Hazelnut) 250g Pouch<br>Item code: CGCH220<br>Brand: Captain Oats<br>Net weight: 250g Pouch</span></p><p text-align:="" justify="" style="text-align: justify;"><span font-size:="" 11pt="" font-family:="" verdana="" geneva="" style="font-size: 10pt; font-family: verdana, geneva; color: #ff6600;"><span box-sizing:="" border-box="" color:="" ff0000="" font-family:="" verdana="" geneva="" font-size:="" 10pt="" font-style:="" normal="" font-variant:="" font-weight:="" letter-spacing:="" line-height:="" 18="" 5714px="" text-align:="" start="" text-indent:="" 0px="" text-transform:="" none="" white-space:="" widows:="" 1="" word-spacing:="" float:="" display:="" inline="" important="" background-color:="" ffffff=""><span color:="" e36c0a="" font-family:="" verdana="" geneva="" font-size:="" 13="" 3333px="" font-style:="" normal="" font-variant:="" font-weight:="" letter-spacing:="" line-height:="" orphans:="" auto="" text-align:="" left="" text-indent:="" 0px="" text-transform:="" none="" white-space:="" widows:="" 1="" word-spacing:="" -webkit-text-stroke-width:="" display:="" inline="" important="" float:="" background-color:="" ffffff=""><span apple-converted-space="">Note:&nbsp;Product delivery duration may vary due to product availability in stock.</span></span></span></span></p><p style="text-align: justify;"><span font-size:="" 11pt="" font-family:="" verdana="" geneva="" style="font-size: 10pt; font-family: verdana, geneva; color: #ff6600;"><span box-sizing:="" border-box="" color:="" ff0000="" font-family:="" verdana="" geneva="" font-size:="" 10pt="" font-style:="" normal="" font-variant:="" font-weight:="" letter-spacing:="" line-height:="" 18="" 5714px="" text-align:="" start="" text-indent:="" 0px="" text-transform:="" none="" white-space:="" widows:="" 1="" word-spacing:="" float:="" display:="" inline="" important="" background-color:="" ffffff=""><span color:="" e36c0a="" font-family:="" verdana="" geneva="" font-size:="" 13="" 3333px="" font-style:="" normal="" font-variant:="" font-weight:="" letter-spacing:="" line-height:="" orphans:="" auto="" text-align:="" left="" text-indent:="" 0px="" text-transform:="" none="" white-space:="" widows:="" 1="" word-spacing:="" -webkit-text-stroke-width:="" display:="" inline="" important="" float:="" background-color:="" ffffff="">Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</span></span></span><p><p>"</p></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 650.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'Captain Granola (Cocoa Hazelnut) 250g Pouch',
                'search_keywords' => 'Captain Granola (Cocoa Hazelnut) 250g Pouch',
                'meta_description' => 'Captain Granola (Cocoa Hazelnut) 250g Pouch',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Captain Granola (Cocoa Hazelnut) 250g Pouch'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 19
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'Mister Potato Crisps 40g Can Sour Cream & Onion',
		        'product_url' => Str::slug('Mister Potato Crisps 40g Can Sour Cream & Onion'),
		        'brand_id' => 36,
                'selected_categories' => "[17, 30]",

                'short_description' => '<ul><li><br><p><span style="font-size: 11pt; font-family: verdana, geneva, sans-serif;"><strong>Product details:</strong></span></p><p><span style="font-family: verdana, geneva, sans-serif; font-size: 10pt;">Mister Potato Crisps 40g Can Sour Cream &amp; Onion<br>Brand: Mister Potato<br>Net weight: 40g <br>Product category: Crisps <br>Color: As given picture.</span></p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p><span style="font-size: 11pt; font-family: verdana, geneva, sans-serif;"><strong>Product details:</strong></span></p><p><span style="font-family: verdana, geneva, sans-serif; font-size: 10pt;">Mister Potato Crisps 40g Can Sour Cream &amp; Onion<br>Brand: Mister Potato<br>Net weight: 40g <br>Product category: Crisps <br>Color: As given picture.</span></p><p style="text-align: justify;"><span style="color: #e36c0a; font-family: verdana,geneva,sans-serif; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><strong><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space">Note: Product delivery duration may vary due to product availability in stock.</span></span></strong></span><br></span></span></p><p style="text-align: justify;"><span style="color: #e36c0a; font-family: verdana,geneva,sans-serif; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;">Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</span></p></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 130.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'Mister Potato Crisps 40g Can Sour Cream & Onion',
                'search_keywords' => 'Mister Potato Crisps 40g Can Sour Cream & Onion',
                'meta_description' => 'Mister Potato Crisps 40g Can Sour Cream & Onion',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Mister Potato Crisps 40g Can Sour Cream & Onion'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],


            // 20
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'Cadbury Oreo Original 45gm 6 Piece Combo',
		        'product_url' => Str::slug('Cadbury Oreo Original 45gm 6 Piece Combo'),
		        'brand_id' => 38,
                'selected_categories' => "[18, 32]",

                'short_description' => '<ul><li><br><p><span style="font-size: 10pt; font-family: verdana, geneva;">Cadbury Oreo Original 45gm <br>Item code: 5500002222<br>Brand: Cadbury <br>Net weight: 45gm<br>Color: As given picture. <br></span></p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p><span style="font-size: 10pt; font-family: verdana, geneva;">Cadbury Oreo Original 45gm <br>Item code: 5500002222<br>Brand: Cadbury <br>Net weight: 45gm<br>Color: As given picture. <br></span></p><p style="text-align: justify;">&nbsp;</p><p style="text-align: justify;"><span style="font-family: verdana, geneva;"><strong><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-size: 10pt; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-size: 14.6667px; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space">Product Delivery Conditions:</span></span></span></span></span></strong></span></p><ul><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>To add more items of <strong>Daily Shopping</strong> to your cart, please <strong><a href="https://www.othoba.com/daily-shopping" target="_blank" rel="noopener"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space">Click here.</span></span></span></span></a></strong></strong></span><span style="font-size: 10pt; font-family: verdana, geneva;"><br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><strong>Return/cancellation</strong>: No change will be applicable which are already delivered to customer. If product quality or quantity problem found then customer can return/cancel their order on delivery time with presence of delivery person.<br></span></li><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Note:</strong> Product delivery duration may vary due to product availability in stock.</span></span></span></span></span></li></ul></ul><p>&nbsp;</p><ul><li style="text-align: justify; margin-bottom: 30px; list-style-type: none;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Out of coverage area: </strong>Dhaka Cantonment Area ( ECB Chattar, Vashantec, Matikata), Uttara Sector 18, Khilkhet, Nikunjo, Sher E bangla Agriculture university, Sher-E-Bangla Nagar, Dhaka.</span></span></span></span></span></li></ul><ul><li style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana, geneva;"><span style="font-size: 10pt;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: red; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span class="Apple-converted-space"><strong>Rajshahi City Coverage Area: </strong>Rajshahi Sadar, Bowalia Thana</span></span></span></span></span></li></ul></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 300.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'Cadbury Oreo Original 45gm 6 Piece Combo',
                'search_keywords' => 'Cadbury Oreo Original 45gm 6 Piece Combo',
                'meta_description' => 'Cadbury Oreo Original 45gm 6 Piece Combo',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Cadbury Oreo Original 45gm 6 Piece Combo'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 21
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => '3W Clinic All In One Honey Ampoule - 250ml',
		        'product_url' => Str::slug('3W Clinic All In One Honey Ampoule - 250ml'),
		        'brand_id' => 38,
                'selected_categories' => "[18, 33]",

                'short_description' => '<ul><li><br><p>3W Clinic All In One Honey Ampoule 250ml<br>Net weight: 250ml<br>Color: (Mixed) As given picture</p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p>3W Clinic All In One Honey Ampoule 250ml<br>Net weight: 250ml<br>Color: (Mixed) As given picture</p><p style="text-align: justify;"><span style="font-family: verdana,geneva; font-size: 10pt;"><span style="font-size: 11pt; font-family: verdana,geneva;"><span style="box-sizing: border-box; color: #ff0000; font-family: verdana,geneva; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.5714px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; float: none; display: inline ! important; background-color: #ffffff;"><span style="color: #e36c0a; font-family: verdana, geneva; font-size: 13.3333px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="font-size: 10pt;">Note: Product delivery duration m</span>ay vary due to product availability in stock.</span></span></span></span></p><p style="text-align: justify;"><span style="font-family: verdana,geneva; font-size: 10pt;"><span style="font-size: 11pt; font-family: verdana,geneva;"><span style="box-sizing: border-box; color: #ff0000; font-family: verdana,geneva; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.5714px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; float: none; display: inline ! important; background-color: #ffffff;"><span style="color: #e36c0a; font-family: verdana, geneva; font-size: 13.3333px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</span></span></span></span></p><div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 1699.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => '3W Clinic All In One Honey Ampoule - 250ml',
                'search_keywords' => '3W Clinic All In One Honey Ampoule - 250ml',
                'meta_description' => '3W Clinic All In One Honey Ampoule - 250ml',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('3W Clinic All In One Honey Ampoule - 250ml'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],


             // 22
        	[
        		'sku' => 'AG6048',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => 'Chocolate Cream Roll 1pcs',
		        'product_url' => Str::slug('Chocolate Cream Roll 1pcs'),
		        'brand_id' => 38,
                'selected_categories' => "[18, 34]",

                'short_description' => '<ul><li><br><p><span style="font-family: verdana,geneva; font-size: 10pt;">Chocolate Cream Roll 1pcs<br>Item code: 46614</span><br><span style="font-family: verdana,geneva; font-size: 10pt;">Brand: Tasty Treat<br></span>Weight: <span style="font-family: verdana,geneva; font-size: 10pt;">1pcs</span><br><span style="font-family: verdana,geneva; font-size: 10pt;">Tasty &amp; quality food</span></p><br></li></ul>',

                'description' => '<div class="full-description" itemprop="description">
                <p><span style="font-family: verdana,geneva; font-size: 10pt;">Chocolate Cream Roll 1pcs<br>Item code: 46614</span><br><span style="font-family: verdana,geneva; font-size: 10pt;">Brand: Tasty Treat<br></span>Weight: <span style="font-family: verdana,geneva; font-size: 10pt;">1pcs</span><br><span style="font-family: verdana,geneva; font-size: 10pt;">Tasty &amp; quality food</span></p><p>&nbsp;</p><p style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><strong><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><strong>Note:</strong><br>&nbsp;<span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><strong style="box-sizing: border-box; font-weight: bold; color: #e36c0a; font-family: verdana, geneva, sans-serif; font-size: 13.3333px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><strong style="box-sizing: border-box; font-weight: bold; color: #e36c0a; font-family: verdana, geneva, sans-serif; font-size: 13.3333px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><strong><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;">*If customer orders more than 4 pcs of same product in an order, customer has to pay 50% amount in advance.</span></span></span></span></strong></span></span></span></span></span></span></span></span></span></span></span></strong></span></span></span></span></strong></span><br>*Any types of complaint regarding products, the customer has to inform within 2 hours after receiving the product.<br>&nbsp;* To add other food items of Tasty Treat to your cart, <span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"> please <strong><a href="https://www.othoba.com/tasty-treat" target="_blank" rel="noopener">click here.</a></strong></span></span></span></span></span></span></span></span></strong></span></span></span></span></span></span></span></span></p><p style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"> <strong>*Coverage area:</strong> Products will be delivered within the following Dhaka &amp; Sylhet City areas from the nearby Tasty Treat outlets:<br><strong>Dhaka:</strong><br>Uttara 6, Uttara 7, Uttara 11, Uttara 14, Nikunja, Mehedi Food Court-300 Feet, Bashundhara R/A, Baridhara, Shahjadpur, Middle Badda, Merul Badda DIT Project, Badda Pragati Sarani, Aftabnagar, South Banasree, Banasree A-Block, Banasree Block-D, Banasree E-Block, Banasree K-Block, Hazipara, Basabo Buddha Mondir, Basabo Tampoo Stand, Khilgaon, Goran, Mugdha, Khilgoan Chowrasta, Gandaria, Moghbazar, Baily Road, Naya Paltan, Bijoynagar, Motijheel, Wari, Maniknagor, Donia, Jatrabari.<br>Gulshan 1, Mohakhali, Farmgate, Panthapath, Green Road, Farmgate Greenroad, Greenroad BEPZA Complex, Jhigatola, Shankar, New Market, Azimpur, Lalbagh, Hazaribagh, Nazimuddin Road. <br>Mohammadpur, Shyamoli, Adabor, Lalmatia, Shyamoli Bus Stand, Mirpur, Mirpur 60 Feet, Mirpur Stadium Gate, Rupnagar, ECB Chattar, Mirpur-10, Mirpur 11, Mirpur 14, Kazipara, Shewrapara, Savar Bus Stand, Savar Thana Road.<br><strong>Sylhet:</strong><br>Amborkhana, Shibgonj, Sheikghat, Kumarpara, Dorga Gate, Zindabazar, Shahjalal University Gate, Amberkhana Aftab Complex, Shahjalal Uposhohor, Bandar Bazar, Majortila, Zinda Bazar Point, Sobhanighat.</span></span></span></span></p><p style="text-align: justify;"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;">*Product delivery duration may vary due to product availability in stock.</span></span></span><strong style="box-sizing: border-box; font-weight: bold; color: #e36c0a; font-family: verdana, geneva, sans-serif; font-size: 13.3333px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important;"><span class="Apple-converted-space" style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><br></span></span></span></strong></span></p><p>&nbsp;</p></div>',

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 50.00,
                'call_for_price' => null,

                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => 'Chocolate Cream Roll 1pcs',
                'search_keywords' => 'Chocolate Cream Roll 1pcs',
                'meta_description' => 'Chocolate Cream Roll 1pcs',
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug('Chocolate Cream Roll 1pcs'),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],



        ]);


        Schema::enableForeignKeyConstraints();


    }
}
