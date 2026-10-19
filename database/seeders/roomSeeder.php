<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\rooms;
use Faker\Factory as Faker;

class roomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roomsData = [
            ['department_id' => 1, 'type' => 'private', 'status' => 'available'],
            ['department_id' => 1, 'type' => 'semi-private', 'status' => 'occupied'],
            ['department_id' => 2, 'type' => 'private', 'status' => 'available'],
            ['department_id' => 2, 'type' => 'ward', 'status' => 'occupied'],
            ['department_id' => 3, 'type' => 'semi-private', 'status' => 'available'],
            ['department_id' => 3, 'type' => 'general', 'status' => 'occupied'],
            ['department_id' => 4, 'type' => 'ward', 'status' => 'available'],
            ['department_id' => 5, 'type' => 'general', 'status' => 'available'],
            ['department_id' => 6, 'type' => 'private', 'status' => 'occupied'],
            ['department_id' => 7, 'type' => 'semi-private', 'status' => 'available'],
        ];

        foreach ($roomsData as $r) {
            rooms::create($r);
        }
    }
}
