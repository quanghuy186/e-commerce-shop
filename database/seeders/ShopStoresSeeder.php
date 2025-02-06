<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopStoresSeeder extends Seeder
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
                'store_code' => $faker->regexify('[A-Z]{5}[0-9]{3}'),
                'store_name' => $faker->words(3, true),
                'description' => $faker->text(),
                'image' => 'stores/store-'.$faker->numberBetween(1,2).'.jpg',
                'created_at' => date('Y-m-d H:i:s'),
            ];
            array_push($list, $row1);
        }
        DB::table('shop_stores')->insert($list);
    }
}
