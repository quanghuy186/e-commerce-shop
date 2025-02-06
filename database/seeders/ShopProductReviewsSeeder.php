<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopProductReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $arr_customer_id = DB::table('shop_customers')->pluck('id');
        $arr_product_id = DB::table('shop_products')->pluck('id');
        $list = [];
        for($i = 0; $i < 10; $i++) {
            $row1 = [
                'product_id' => $faker->randomElement($arr_product_id),
                'customer_id' => $faker->randomElement($arr_customer_id),
                'rating' => $faker->numberBetween(1, 5),
                'comment' => $faker->text(),
                'created_at' => date('Y-m-d H:i:s'),
            ];
            array_push($list, $row1);
        }
        DB::table('shop_product_reviews')->insert($list);
    }
}