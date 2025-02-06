<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopPaymentTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $list = [];
        for($i = 0; $i < 10; $i++) {
            $row = [
                'payment_code' => $faker->regexify('[A-Z]{5}[0-4]{3}'),
                'payment_name' => $faker->creditCardType(),
                'description' => $faker->text(),
                'image' => 'payments/payment-'.$faker->numberBetween(1,2).'.png',
                'created_at' => date('Y-m-d H:i:s'),
            ];
            array_push($list, $row);
        }
        DB::table('shop_payment_types')->insert($list);
    }
}