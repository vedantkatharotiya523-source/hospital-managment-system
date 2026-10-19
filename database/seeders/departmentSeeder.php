<?php

namespace Database\Seeders;

use App\Models\department;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class departmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'name' => 'Cardiology & Heart Care',
                'description' => 'Comprehensive cardiac diagnostics, angiography, angioplasty, 2D Echocardiography, Holter monitoring, and intensive coronary care unit (ICCU).',
                'photo_path' => 'images/clinic_01.jpg',
                'block_id' => 1,
                'hod_id' => 1,
            ],
            [
                'name' => 'Obstetrics & Gynecology',
                'description' => 'Expert maternal healthcare, normal and cesarean deliveries, high-risk pregnancy monitoring, painless labor, and advanced laparoscopic gynecology surgeries.',
                'photo_path' => 'images/clinic_02.jpg',
                'block_id' => 4,
                'hod_id' => 2,
            ],
            [
                'name' => 'Orthopedics & Joint Replacement',
                'description' => 'Specialized in total knee and hip replacement, arthroscopic ligament reconstruction, trauma care, fracture fixation, and spine rehabilitation.',
                'photo_path' => 'images/clinic_03.jpg',
                'block_id' => 1,
                'hod_id' => 3,
            ],
            [
                'name' => 'Pediatrics & Neonatal Care',
                'description' => 'Dedicated pediatric emergency, routine childhood immunizations, well-baby clinic, and state-of-the-art Neonatal Intensive Care Unit (NICU).',
                'photo_path' => 'images/clinic_01.jpg',
                'block_id' => 4,
                'hod_id' => 4,
            ],
            [
                'name' => 'General Medicine & Diabetology',
                'description' => 'Holistic management of acute infections, chronic diabetes, hypertension, metabolic disorders, and adult multi-system disease treatments.',
                'photo_path' => 'images/clinic_02.jpg',
                'block_id' => 2,
                'hod_id' => 5,
            ],
            [
                'name' => 'General & Laparoscopic Surgery',
                'description' => 'Advanced minimal-access laparoscopic gallbladder, hernia, appendix procedures, emergency abdominal trauma care, and laser surgery.',
                'photo_path' => 'images/clinic_03.jpg',
                'block_id' => 1,
                'hod_id' => 6,
            ],
            [
                'name' => 'Neurology & Stroke Care',
                'description' => '24x7 acute stroke protocol, epilepsy clinic, nerve conduction studies, migraine clinic, and specialized neurological rehabilitation.',
                'photo_path' => 'images/clinic_01.jpg',
                'block_id' => 5,
                'hod_id' => 7,
            ],
            [
                'name' => 'Radiology & Diagnostic Imaging',
                'description' => 'Round-the-clock digital X-Ray, high-resolution Ultrasound, 4D Color Doppler, spiral CT scanning, and automated pathology lab services.',
                'photo_path' => 'images/clinic_02.jpg',
                'block_id' => 3,
                'hod_id' => 8,
            ],
        ];

        foreach ($departments as $dept) {
            department::create($dept);
        }
    }
}
