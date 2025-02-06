<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopImportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $arr_employee_id = DB::table('acl_users')->pluck('id');
        $arr_store_id = DB::table('shop_stores')->pluck('id');
        $list = [];
        for($i = 0; $i < 10; $i++) {
            $row = [
                'store_id' => $faker->randomElement($arr_store_id),
                'employee_id' => $faker->randomElement($arr_employee_id),
                'import_date' => $faker->dateTimeBetween('-4 week', 'now'),
                'created_at' => date('Y-m-d H:i:s'),
            ];
            array_push($list, $row);
        }
        DB::table('shop_imports')->insert($list);
    }
}
