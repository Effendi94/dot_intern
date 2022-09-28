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
            AdminSeeder::class,
            CustomerSeeder::class,
            DiscountSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
