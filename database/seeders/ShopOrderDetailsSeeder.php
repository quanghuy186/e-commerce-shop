<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopOrderDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $list = [];
        $product_id = DB::table('shop_products')->pluck('id');
        $order_id = DB::table('shop_orders')->pluck('id');
        for($i = 0; $i < 10; $i++) {
            $row = [
                'order_id'      => $faker->randomElement($order_id),
                'product_id'      => $faker->randomElement($product_id),
                'quantity'       => $faker->randomNumber(),
                'unit_price'     => $faker->randomNumber(),
                'discount_percentage'        => $faker->randomNumber(),
                'discount_amount'    => $faker->randomNumber(),
                'order_detail_status'    => $faker->randomElement(['Pending', 'Completed', 'Cancelled']),
                'date_allocated'        => $faker->dateTimeBetween('-1 week', 'now'),
                'created_at'       => $faker->date('Y-m-d H:i:s'),
            ];
            array_push($list, $row);
        }
        DB::table('shop_order_details')->insert($list);
    }
}
