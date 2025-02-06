<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopPostCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $list2 = [];
        for($i = 0; $i < 10; $i++) {
            $row2 = [
                'post_category_code' => $faker->regexify('[A-Z]{5}[0-9]{3}'),
                'post_category_name' => $faker->words(3, true),
                'description' => $faker->text(),
                'image' => 'categories/category-'.$faker->numberBetween(1,2).'.png',
                'created_at' => now(),
            ];
            array_push($list2, $row2);
        }
        DB::table('shop_posts_categories')->insert($list2);


        $list3 = [];
        for($i = 0; $i < 10; $i++) {
            $row3 = [
                'post_slug' => $faker->regexify('[A-Z]{5}[0-9]{3}'),
                'post_title' => $faker->words(3, true),
                'post_content' => $faker->text(),
                'post_excerpt' => 'categories/category-'.$faker->numberBetween(1,2).'.png',
                'post_type' => 'categories/category-'.$faker->numberBetween(1,2).'.png',
                'post_excerpt' => 'categories/category-'.$faker->numberBetween(1,2).'.png',
                'post_status' => 'categories/category-'.$faker->numberBetween(1,2).'.png',
                'post_image' => 'categories/category-'.$faker->numberBetween(1,2).'.png',
                'user_id' => 'categories/category-'.$faker->numberBetween(1,2).'.png',
                'post_category_id' => 'categories/category-'.$faker->numberBetween(1,2).'.png',
                'created_at' => now(),
            ];
            array_push($list3, $row3);
        }
        DB::table('shop_posts')->insert($list3);
    }
}