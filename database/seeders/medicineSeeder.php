<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\medicine;
use Faker\Factory as Faker;
class medicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medicines = [
            ['code' => 'MED-DOLO-650 (Paracetamol 650mg)', 'price' => '32.50', 'quantity' => '250'],
            ['code' => 'MED-AUGM-625 (Amoxyclav 625mg)', 'price' => '185.00', 'quantity' => '120'],
            ['code' => 'MED-PAN-40 (Pantoprazole 40mg)', 'price' => '95.00', 'quantity' => '180'],
            ['code' => 'MED-AZEE-500 (Azithromycin 500mg)', 'price' => '120.00', 'quantity' => '90'],
            ['code' => 'MED-TELMA-40 (Telmisartan 40mg)', 'price' => '110.00', 'quantity' => '140'],
            ['code' => 'MED-GLYC-500 (Metformin 500mg)', 'price' => '45.00', 'quantity' => '200'],
            ['code' => 'MED-VOVER-50 (Diclofenac 50mg)', 'price' => '55.00', 'quantity' => '150'],
            ['code' => 'MED-EMES-4 (Ondansetron 4mg)', 'price' => '42.00', 'quantity' => '160'],
            ['code' => 'INJ-MONOC-1G (Ceftriaxone 1g IV)', 'price' => '78.00', 'quantity' => '80'],
            ['code' => 'IVF-NS-500ML (Normal Saline 0.9%)', 'price' => '48.00', 'quantity' => '300'],
            ['code' => 'IVF-RL-500ML (Ringer Lactate)', 'price' => '52.00', 'quantity' => '220'],
            ['code' => 'MED-MONTR-LC (Montelukast + Levocet)', 'price' => '135.00', 'quantity' => '110'],
        ];

        foreach ($medicines as $m) {
            medicine::create($m);
        }
    }
}