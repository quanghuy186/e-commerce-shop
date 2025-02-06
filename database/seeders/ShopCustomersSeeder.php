<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopCustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $list = [];
        for ($i = 0; $i < 10; $i++) {
            $row = [
                'username' => $faker->userName(),
                'password' => bcrypt('123456'),
                'last_name' => $faker->lastName(),
                'first_name' => $faker->firstName(),
                'gender' => $faker->randomElement([0, 1]),
                'email' => $faker->unique()->safeEmail(),
                'birthday' => $faker->date('Y-m-d'),
                'avatar' => 'customer/avatars/avt_default_nam.png',
                'code' => $faker->regexify('[A-Z]{5}[0-9]{3}'),
                'phone' => $faker->phoneNumber(),
                'company' => $faker->company(),
                'billing_address' => $faker->address(),
                'shipping_address' => $faker->address(),
                'city' => $faker->city(),
                'state' => '',
                'postal_code' => $faker->regexify('[0-9]{5}'),
                'country' => $faker->country(),
                'remember_token' => $faker->regexify('[A-Z0-9]{10}'),
                'activate_code' => $faker->regexify('[A-Z0-9]{10}'),
                'status' => $faker->randomElement([0, 1]),
                'created_at' => now(),
            ];
            array_push($list, $row);
        }

    DB::table('shop_customers')->insert($list);
    }
}
