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
                'code' => 0,
                'name' => 'Cancel'
            ],
            [
                'code' => 1,
                'name' => 'Pending'
            ],
            [
                'code' => 2,
                'name' => 'On Progress'
            ],
            [
                'code' => 3,
                'name' => 'Complete'
            ],
            [
                'code' => 4,
                'name' => 'Approved'
            ],
            [
                'code' => 5,
                'name' => 'Declined'
            ],
            [
                'code' => 6,
                'name' => 'Blocked'
            ],
            [
                'code' => 7,
                'name' => 'Refund'
            ],
            [
                'code' => 8,
                'name' => 'Active'
            ],
            [
                'code' => 9,
                'name' => 'Used'
            ],
            [
                'code' => 10,
                'name' => 'New'
            ],
            [
                'code' => 11,
                'name' => 'Upgrade'
            ],
            [
                'code' => 12,
                'name' => 'Request'
            ],
            [
                'code' => 14,
                'name' => 'Expired'
            ],
        ];

        Status::insert($statuses);
    }
}
