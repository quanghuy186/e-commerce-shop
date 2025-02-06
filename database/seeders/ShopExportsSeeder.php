<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ShopExportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $store_id = DB::table('shop_stores')->pluck('id');
        $employee_id = DB::table('acl_users')->pluck('id');
        $list1 = [];
        for($i = 0; $i < 10; $i++) {
            $row1 = [
                'store_id' => $faker->randomElement($store_id),
                'employee_id' => $faker->randomElement($employee_id),
                'export_date' => $faker->dateTimeBetween('-1 week', 'now'),
                'created_at' => date('Y-m-d H:i:s'),
            ];
            array_push($list1, $row1);
        }
        DB::table('shop_exports')->insert($list1);


        $export_id = DB::table('shop_exports')->pluck('id');
        $product_id = DB::table('shop_products')->pluck('id');
        $list2 = [];
        for($i = 0; $i < 10; $i++) {
            $row2 = [
                'export_id' => $faker->randomElement($export_id),
                'product_id' => $faker->randomElement($product_id),
                'quantity' => $faker->randomNumber(),
                'unit_price' => $faker->numberBetween(100000, 100000000),
                'created_at' => date('Y-m-d H:i:s'),
            ];
            array_push($list2, $row2);
        }
        DB::table('shop_export_details')->insert($list2);
    }
}