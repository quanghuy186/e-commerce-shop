<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopImportDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        


        $faker = \Faker\Factory::create();
        $import_id = DB::table('shop_imports')->pluck('id');
        $product_id = DB::table('shop_products')->pluck('id');
        $list = [];
        for($i = 0; $i < 10; $i++) {
            $row = [
                'import_id' => $faker->randomElement($import_id),
                'product_id' => $faker->randomElement($product_id),
                'quantity' => $faker->randomNumber(),
                'unit_price' => $faker->randomNumber(),
                'created_at' => date('Y-m-d H:i:s'),
            ];
            array_push($list, $row);
        }
        DB::table('shop_import_details')->insert($list);
    }
}
