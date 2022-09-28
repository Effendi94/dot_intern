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
        Status::truncate();
        $statuses = [
            [
                'code' => '00',
                'name' => 'Cancel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '01',
                'name' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '02',
                'name' => 'On Progress',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '03',
                'name' => 'Complete',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '04',
                'name' => 'Approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '05',
                'name' => 'Declined',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '06',
                'name' => 'Blocked',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '07',
                'name' => 'Refund',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '08',
                'name' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '09',
                'name' => 'Used',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '10',
                'name' => 'New',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '11',
                'name' => 'Upgrade',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '12',
                'name' => 'Request',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => '14',
                'name' => 'Expired',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Status::insert($statuses);
    }
}
