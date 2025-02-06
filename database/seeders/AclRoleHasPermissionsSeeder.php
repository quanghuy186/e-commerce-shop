<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AclRoleHasPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = \Faker\Factory::create();

        // $role_ids = DB::table('acl_roles')->pluck('id');
        // $permission_id = DB::table('acl_permissions')->pluck('id');
        // $list4 = [];
        // for($i = 0; $i < 10; $i++) {
        //     $row4 = [
        //         'role_id' => $faker->randomElement($role_ids),
        //         'permission_id' => $faker->randomElement($permission_id),
        //         'created_at' => now(),
        //     ];
        //     array_push($list4, $row4);
        // }
        // DB::table('acl_role_has_permissions')->insert($list4);

        // $permission_id = DB::table('acl_permissions')->pluck('id');
        // $user_id = DB::table('acl_users')->pluck('id');
        // $list5 = [];
        // for($i = 0; $i < 10; $i++) {
        //     $row5 = [
        //         'user_id' => $faker->randomElement($user_id),
        //         'permission_id' => $faker->randomElement($permission_id),
        //         'created_at' => now(),
        //     ];
        //     array_push($list5, $row5);
        // }
        // DB::table('acl_user_has_permissions')->insert($list5);
    }
}