<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $list = [];
        $row1 = [
            'username' => 'admin',
            'password' => bcrypt(123456),
            'last_name' => 'Do Quang',
            'first_name' => 'Huy',
            'gender' => 1,
            'email' => 'quanghuy180623@gmail.com',
            'birthday' => $faker->dateTime(),
            'avatar' => 'customer/avatars/avt_default_nam.png',
            'code' => $faker->regexify('[A-Z]{5}[0-4]{3}'),
            'job_title' => 'Quản trị hệ thống',
            'department' => 'Quản lý',
            'manager_id' => NULL,
            'phone' => '019203121',
            'address1' => 'Phú thọ',
            'address2' => 'Hà Nội',
            'city' => 'TP Hà Nội',
            'state' => '',
            'postal_code' => $faker->regexify('[A-Z]{5}[0-4]{3}'),
            'country' => 'Việt Nam',
            'remember_token' => $faker->regexify('[A-Z]{5}[0-4]{3}'),
            'active_code' => '',
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        array_push($list, $row1);

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
                    'job_title' => $faker->jobTitle(),
                    'department' => $faker->randomElement(['Quản lý', 'Kinh doanh', 'Hành chính', 'Kỹ thuật']),
                    'manager_id' => null,
                    'phone' => $faker->phoneNumber(),
                    'address1' => $faker->address(),
                    'address2' => $faker->city(),
                    'city' => $faker->city(),
                    'state' => '',
                    'postal_code' => $faker->regexify('[0-9]{5}'),
                    'country' => 'Việt Nam',
                    'remember_token' => $faker->regexify('[A-Z0-9]{10}'),
                    'active_code' => '',
                    'status' => $faker->randomElement([0, 2, 3]),
                    'created_at' => now(),
                ];
                array_push($list, $row);
            }

        DB::table('acl_users')->insert($list);
    }
}
