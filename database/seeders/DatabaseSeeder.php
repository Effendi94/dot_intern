<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StatusSeeder::class,
            DiscountSeeder::class,
            AdminSeeder::class,
            CustomerSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
