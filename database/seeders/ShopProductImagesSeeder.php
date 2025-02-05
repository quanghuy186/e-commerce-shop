<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $list = [];
        $arr_product_id = DB::table('shop_products')->pluck('id');
        for($i = 0; $i < 100; $i++){
            $row = [
                'product_id' => $faker->randomElement($arr_product_id),
                'image' => 'products/product-'.$faker->numberBetween(1,3).'.jpg',
                'created_at' => $faker->dateTimeBetween('-4 week', '+4 week')
            ];
            array_push($list, $row);
        }
        DB::table('shop_product_images')->insert($list);
    }
}