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
use Database\Seeders\UsersSeeder;
use Database\Seeders\ShopStoresSeeder;
use Database\Seeders\ShopImportsSeeder;
use Database\Seeders\ShopImportDetailsSeeder;
use Database\Seeders\ShopPaymentTypesSeeder;
use Database\Seeders\ShopCustomersSeeder;
use Database\Seeders\ShopOrdersSeeder;
use Database\Seeders\ShopOrderDetailsSeeder;
use Database\Seeders\ShopProductReviewsSeeder;
use Database\Seeders\ShopExportsSeeder;
use Database\Seeders\ShopVouchersSeeder;
use Database\Seeders\AclRolesSeeder;
use Database\Seeders\AclRoleHasPermissionsSeeder;
use Database\Seeders\ShopPostCategoriesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //data shop
        $this->call([ShopSuppliersSeeder::class]);
        $this->call([ShopCategoriesSeeder::class]);
        $this->call([ShopProductSeeder::class]);
        $this->call([ShopProductImagesSeeder::class]);
        $this->call([ShopProductDiscountsSeeder::class]);

        //data User
        $this->call([UsersSeeder::class]);

        //data shop store
        $this->call([ShopStoresSeeder::class]);
        $this->call([ShopImportsSeeder::class]);
        $this->call([ShopImportDetailsSeeder::class]);

        $this->call([ShopPaymentTypesSeeder::class]);
        $this->call([ShopCustomersSeeder::class]);
        $this->call([ShopOrdersSeeder::class]);
        $this->call([ShopOrderDetailsSeeder::class]);
        $this->call([ShopProductReviewsSeeder::class]);
        $this->call([ShopExportsSeeder::class]);

        //vouchers
        $this->call([ShopVouchersSeeder::class]);
        $this->call([AclRolesSeeder::class]);
        $this->call([AclRoleHasPermissionsSeeder::class]);

        $this->call([ShopPostCategoriesSeeder::class]);

        //acl user

    }
}