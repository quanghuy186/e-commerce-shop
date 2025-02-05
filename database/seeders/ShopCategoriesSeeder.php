<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];
        $row1 = [
            'id' => '1',
            'category_code' => 'CPL',
            'category_name' => 'Danh mục chưa phân loại',
            'description' => 'Danh mục mặc định của hệ thống',
            'image' => 'categories/logo/categories_default.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        array_push($list, $row1);

        $row2 = [
            'id' => '2',
            'category_code' => 'C2',
            'category_name' => 'Danh mục laptop',
            'description' => 'Nhà cung cấp laptop uy tín',
            'image' => 'categories/logo/laptop_default.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        array_push($list, $row2);

        $row3 = [
            'id' => '3',
            'category_code' => 'C3',
            'category_name' => 'Danh mục điện thoại',
            'description' => 'Nhà cung cấp điện thoại uy tín',
            'image' => 'categories/logo/mobile_default.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        array_push($list, $row3);

        DB::table('shop_categories')->insert($list);

    }
}