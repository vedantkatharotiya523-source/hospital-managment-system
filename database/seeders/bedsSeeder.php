<?php

namespace Database\Seeders;
use App\Models\beds;
use Illuminate\Database\Seeder;

class bedsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($roomId = 1; $roomId <= 10; $roomId++) {
            beds::create(['room_id' => $roomId]);
            beds::create(['room_id' => $roomId]);
        }
    }
}
