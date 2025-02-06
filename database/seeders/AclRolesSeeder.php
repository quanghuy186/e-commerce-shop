<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AclRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
// /acl_roles
        $list1 = [];
        for($i = 0; $i < 10; $i++) {
            $row1 = [
                'name' => $faker->word,
                'display_name' => $faker->words(3, true),
                'guard_name' => $faker->word,
                'created_at' => now(),
            ];
            array_push($list1, $row1);
        }
        DB::table('acl_roles')->insert($list1);

//acl_user_has_roles
        $user_id = DB::table('acl_users')->pluck('id');
        $role_ids = DB::table('acl_roles')->pluck('id');
        $list2 = [];
        for($i = 0; $i < 10; $i++) {
            $row2 = [
                'user_id' => $faker->randomElement($user_id),
                'role_id' => $faker->randomElement($role_ids),
                'created_at' => now(),
            ];
            array_push($list2, $row2);
        }
        DB::table('acl_user_has_roles')->insert($list2);

//acl_permissions
        $list3 = [];
        for($i = 0; $i < 10; $i++) {
            $row3 = [
                'name' => $faker->word(),
                'display_name' => $faker->words(2, true),
                'guard_name' => $faker->words(3, true),
                'created_at' => now(),
            ];
            array_push($list3, $row3);
        }
        DB::table('acl_permissions')->insert($list3);


    }
}