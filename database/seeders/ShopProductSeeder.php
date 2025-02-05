<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Faker;

class ShopProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $list = [];
        $row1 = [
            'product_code' => 'A1405ZA-KM264W',
            'product_name' => 'Asus Vivobook 14 OLED',
            'image' => 'products/asu_vivo.png',
            'short_description' => 'Laptop ASUS Vivobook 14 OLED A1405ZA-KM264W i5-12500H/16GB/512GB/14" 2.8K/Win11',
            'description' => 'Hướng tới nhóm người dùng chủ yếu là sinh viên và dân văn phòng, doanh nhân, ASUS Vivobook 14 OLED A1405ZA-KM264W được thiết kế với kích thước nhỏ gọn cùng trọng lượng tối ưu để thuận tiện cho việc di chuyển. Cụ thể, vỏ máy được hoàn thiện từ chất liệu nhựa với kích thước tổng thể là 31.71 x 22.20 x 1.99 mm, nặng 1.6kg. Nhờ đó, bạn sẽ dễ dàng cất gọn em nó trong balo, cặp sách và mang theo đến bất cứ đâu, sử dụng linh hoạt cho các nhu cầu của mình.',
            'standard_cost' => '5000000',
            'list_price' => '7000000',
            'quantity_per_unit' => '15',
            'discontinued' => '0',
            'is_featured' => '1',
            'is_new' => '1',
            'category_id' => '2',
            'supplier_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        // array_push($list, $row1);

        for($i = 0; $i < 10; $i++){
            $row = [
            'product_code' => $faker->regexify('[A-Z]{5}[0-4]{3}'),
            'product_name' => $faker->words(3, true),
            'image' => 'products/product-'.$faker->numberBetween(1,3).'.jpg',
            'short_description' => $faker->sentence(),
            'description' => $faker->paragraphs(2, true),
            'standard_cost' => $faker->numberBetween(20000, 5000000),
            'list_price' => $faker->numberBetween(120000, 5000000),
            'quantity_per_unit' => $faker->randomNumber(),
            'discontinued' => $faker->randomElement([0, 1]),
            'is_featured' => $faker->randomElement([0, 1]),
            'is_new' => $faker->randomElement([0, 1]),
            'category_id' => $faker->randomElement([1, 2, 3]),
            'supplier_id' => $faker->randomElement([1, 2]),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ];
            array_push($list, $row);
        }

        DB::table('shop_products')->insert($list);

    }
}
