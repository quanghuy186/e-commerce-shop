<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $list = [];
        $arr_users = DB::table('acl_users')->pluck('id');
        $arr_customers = DB::table('shop_customers')->pluck('id');
        $arr_users = DB::table('acl_users')->pluck('id');
        $arr_payments = DB::table('shop_payment_types')->pluck('id');
        for($i = 0; $i < 10; $i++) {
            $row = [
                'employee_id'      => $faker->randomElement($arr_users),
                'customer_id'      => $faker->randomElement($arr_customers),
                'order_date'       => $faker->dateTimeBetween('-1 years', 'now'),
                'shipped_date'     => $faker->dateTimeBetween('now', '+1 month'),
                'ship_name'        => $faker->company(),
                'ship_address1'    => $faker->streetAddress(),
                'ship_address2'    => $faker->secondaryAddress(),
                'ship_city'        => $faker->city(),
                'ship_state'       => $faker->state(),
                'ship_postal_code' => $faker->postcode(),
                'ship_country'     => $faker->country(),
                'shipping_fee'     => $faker->randomFloat(2, 5, 500), // Phí ship từ 5 đến 500
                'payment_type_id'  => $faker->randomElement($arr_payments),
                'paid_date'        => $faker->dateTimeBetween('-4 week', 'now'),
                'order_status'     => $faker->randomElement(['Pending', 'Completed', 'Cancelled']),
                'created_at'       => $faker->date('Y-m-d H:i:s'),
            ];
            array_push($list, $row);
        }
        DB::table('shop_orders')->insert($list);
    }
}
