<?php

namespace Database\Seeders;

use App\Models\doctor;
use Illuminate\Database\Seeder;
use App\Models\hod;

class HodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = doctor::all();
        foreach ($doctors as $doc) {
            hod::create([
                'doctor_id' => $doc->id
            ]);
        }
    }
}
