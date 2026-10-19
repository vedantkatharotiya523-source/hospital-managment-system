<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\block;
class blockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blocks = [
            ['blockname' => 'Sardar Patel Surgical Wing (Block A)', 'blockcode' => '101'],
            ['blockname' => 'Dr. Vikram Sarabhai OPD Complex (Block B)', 'blockcode' => '201'],
            ['blockname' => 'Charak Diagnostic & Emergency Wing (Block C)', 'blockcode' => '301'],
            ['blockname' => 'Mother & Child Care Wing (Block D)', 'blockcode' => '401'],
            ['blockname' => 'Critical Care & Multi-Speciality ICU (Block E)', 'blockcode' => '501'],
        ];

        foreach ($blocks as $block) {
            block::create($block);
        }
    }
}
