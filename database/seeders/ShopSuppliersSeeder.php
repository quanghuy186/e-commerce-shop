<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = [];
        $row1 = [
            'id' => '1',
            'supplier_code' => 'NCC1',
            'name' => 'Nhà cung cấp Apple',
            'description' => 'Nhà cung cấp điện thoại iphone uy tín',
            'image' => 'suppliers/logo/logo_iphone.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        array_push($list, $row1);

        $row2 = [
            'id' => '2',
            'supplier_code' => 'NCC2',
            'name' => 'Nhà cung cấp Microsoft',
            'description' => 'Nhà cung cấp máy tính uy tín',
            'image' => 'suppliers/logo/logo_microsoft.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        array_push($list, $row2);

        DB::table('shop_suppliers')->insert($list);

    }
}