<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopVouchersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $list = [];
        for($i = 0; $i < 10; $i++) {
            $row1 = [
                'voucher_code' => $faker->regexify('[A-Z]{5}[0-9]{3}'),
                'voucher_name' => $faker->words(3, true),
                'description' => $faker->text(),
                'uses' => $faker->randomNumber(),
                'max_uses' => $faker->randomNumber(),
                'max_uses_user' => $faker->randomNumber(),
                'type' => $faker->randomElement([0, 1, 2]),
                'discount_amount' => $faker->numberBetween(10000, 1000000),
                'is_fixed' => $faker->randomElement([0, 1]),
                'start_date' => $faker->dateTimeBetween('-1 week', 'now'),
                'end_date' => $faker->dateTimeBetween('-1 week', 'now'),
                'delete_at' => $faker->dateTimeBetween('now', '+1 week'),
                'created_at' => date('Y-m-d H:i:s'),
            ];
            array_push($list, $row1);
        }
        DB::table('shop_vouchers')->insert($list);


        $list2 = [];
        $product_id = DB::table('shop_products')->pluck('id');
        $voucher_id = DB::table('shop_vouchers')->pluck('id');
        for($i = 0; $i < 10; $i++) {
            $row2 = [
                'product_id' => $faker->randomElement($product_id),
                'voucher_id' => $faker->randomElement($voucher_id),
                'created_at' => date('Y-m-d H:i:s'),
            ];
            array_push($list2, $row2);
        }
        DB::table('shop_product_vouchers')->insert($list2);


        $list3 = [];
        $customer_id = DB::table('shop_customers')->pluck('id');
        $voucher_id = DB::table('shop_vouchers')->pluck('id');
        for($i = 0; $i < 10; $i++) {
            $row3 = [
                'customer_id' => $faker->randomElement($customer_id),
                'voucher_id' => $faker->randomElement($voucher_id),
                'created_at' => date('Y-m-d H:i:s'),
            ];
            array_push($list3, $row3);
        }
        DB::table('shop_customer_vouchers')->insert($list3);
    }
}
