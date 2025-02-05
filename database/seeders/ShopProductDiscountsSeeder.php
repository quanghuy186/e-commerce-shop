<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopProductDiscountsSeeder extends Seeder
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
            $is_fixed = $faker->randomElement([0, 1]);
            if($is_fixed == 0){
                $discount_amount = $faker->randomFloat(1, 2, 20);
            }else{
                $discount_amount = $faker->numberBetween(20000, 100000);
            }
            $row = [
                'product_id' => $faker->randomElement($arr_product_id),
                'discount_name' => $faker->words(3, true),
                'discount_amount' => $discount_amount,
                'is_fixed' => $is_fixed,
                'start_date' => $faker->dateTimeBetween('-4 week', 'now'),
                'end_date' => $faker->dateTimeBetween('now', '4 week'),
            ];
            array_push($list, $row);
        }
        DB::table('shop_product_discounts')->insert($list);
    }
}
