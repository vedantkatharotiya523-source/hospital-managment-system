<?php

namespace Database\Seeders;

use App\Models\doctor;
use App\Models\employee;
use Illuminate\Database\Seeder;

class doctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctorEmployees = employee::where("position", "doctor")->get();
        foreach ($doctorEmployees as $emp) {
            Doctor::create([
                "employee_id" => $emp->id
            ]);
        }
    }
}
