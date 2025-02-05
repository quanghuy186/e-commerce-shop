<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ShopSuppliersSeeder;
use Database\Seeders\ShopCategoriesSeeder;
use Database\Seeders\ShopProductSeeder;
use Database\Seeders\ShopProductImagesSeeder;
use Database\Seeders\ShopProductDiscountsSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([ShopSuppliersSeeder::class]);
        $this->call([ShopCategoriesSeeder::class]);
        $this->call([ShopProductSeeder::class]);
        $this->call([ShopProductImagesSeeder::class]);
        $this->call([ShopProductDiscountsSeeder::class]);
    }
}