<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
                'code' => 0,
                'name' => 'Cancel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 1,
                'name' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 2,
                'name' => 'On Progress',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 3,
                'name' => 'Complete',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 4,
                'name' => 'Approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 5,
                'name' => 'Declined',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 6,
                'name' => 'Blocked',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 7,
                'name' => 'Refund',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 8,
                'name' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 9,
                'name' => 'Used',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 10,
                'name' => 'New',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 11,
                'name' => 'Upgrade',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 12,
                'name' => 'Request',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 14,
                'name' => 'Expired',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Status::insert($statuses);
    }
}
