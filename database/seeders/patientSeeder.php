<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\patient;

class patientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patients = [
            [
                'name' => 'Rameshbhai Patel',
                'email' => 'ramesh.patel.rajkot@gmail.com',
                'phone' => '+91 98251 10293',
                'address' => 'Shree Ram Park, 150 Feet Ring Road, Rajkot',
                'gender' => 'Male',
                'age' => '54',
                'bloodgroup' => 'B+',
                'status' => 'admitted',
                'disease' => 'Acute Unstable Angina & Hypertension',
                'doctor' => 'Dr. Rajesh Mehta',
                'admit_date' => date('Y-m-d', strtotime('-3 days')),
                'discharge_date' => null,
                'description' => 'Admitted to ICCU for cardiac monitoring and angiography evaluation.'
            ],
            [
                'name' => 'Geetaben Dave',
                'email' => 'geetaben.dave@gmail.com',
                'phone' => '+91 98252 21304',
                'address' => 'Saurashtra Kala Kendra, Nirmala Road, Rajkot',
                'gender' => 'Female',
                'age' => '62',
                'bloodgroup' => 'O+',
                'status' => 'admitted',
                'disease' => 'Severe Bilateral Osteoarthritis Knee',
                'doctor' => 'Dr. Jayesh Dave',
                'admit_date' => date('Y-m-d', strtotime('-2 days')),
                'discharge_date' => null,
                'description' => 'Underwent Total Knee Replacement (TKR). Currently stable in post-op recovery.'
            ],
            [
                'name' => 'Pooja Vora',
                'email' => 'pooja.vora94@gmail.com',
                'phone' => '+91 98253 32415',
                'address' => 'Ghanshyam Nagar, Kalawad Road, Rajkot',
                'gender' => 'Female',
                'age' => '28',
                'bloodgroup' => 'A+',
                'status' => 'admitted',
                'disease' => 'Full Term Pregnancy (Elective LSCS)',
                'doctor' => 'Dr. Hetal Patel',
                'admit_date' => date('Y-m-d', strtotime('-1 days')),
                'discharge_date' => null,
                'description' => 'Delivered healthy baby boy. Mother and newborn under routine observation.'
            ],
            [
                'name' => 'Sureshbhai Joshi',
                'email' => 'suresh.joshi@yahoo.com',
                'phone' => '+91 98254 43526',
                'address' => 'Naval Nagar, Mavdi Main Road, Rajkot',
                'gender' => 'Male',
                'age' => '47',
                'bloodgroup' => 'AB+',
                'status' => 'admitted',
                'disease' => 'Type 2 Diabetes Mellitus with Diabetic Foot Ulcer',
                'doctor' => 'Dr. Bhavna Joshi',
                'admit_date' => date('Y-m-d', strtotime('-4 days')),
                'discharge_date' => null,
                'description' => 'Wound debridement done, insulin therapy adjusted, responding well.'
            ],
            [
                'name' => 'Aarav Trivedi',
                'email' => 'manish.trivedi.rajkot@gmail.com',
                'phone' => '+91 98255 54637',
                'address' => 'Akshar Marg, Near Amin Marg, Rajkot',
                'gender' => 'Male',
                'age' => '6',
                'bloodgroup' => 'O+',
                'status' => 'admitted',
                'disease' => 'Acute Bronchopneumonia with High Grade Fever',
                'doctor' => 'Dr. Amit Vora',
                'admit_date' => date('Y-m-d', strtotime('-2 days')),
                'discharge_date' => null,
                'description' => 'IV antibiotics and nebulization ongoing. Child active and afebrile.'
            ],
            [
                'name' => 'Hasmukhbhai Parmar',
                'email' => 'hasmukh.parmar@gmail.com',
                'phone' => '+91 98256 65748',
                'address' => 'Kothariya Colony, Near Sorathiyawadi Circle, Rajkot',
                'gender' => 'Male',
                'age' => '39',
                'bloodgroup' => 'B+',
                'status' => 'discharged',
                'disease' => 'Acute Appendicitis (Laparoscopic Appendectomy)',
                'doctor' => 'Dr. Sanjay Trivedi',
                'admit_date' => date('Y-m-d', strtotime('-6 days')),
                'discharge_date' => date('Y-m-d', strtotime('-1 days')),
                'description' => 'Minimally invasive laparoscopic surgery successful. Discharged in stable condition.'
            ],
            [
                'name' => 'Bhavik Radadiya',
                'email' => 'bhavik.r@outlook.com',
                'phone' => '+91 98257 76859',
                'address' => 'Radhika Park, University Road, Rajkot',
                'gender' => 'Male',
                'age' => '33',
                'bloodgroup' => 'O-',
                'status' => 'pending',
                'disease' => 'Severe Migraine with Aura & Cervical Radiculopathy',
                'doctor' => 'Dr. Nirav Radadiya',
                'admit_date' => null,
                'discharge_date' => null,
                'description' => 'Scheduled for MRI Brain & Cervical Spine diagnostics.'
            ]
        ];

        foreach ($patients as $p) {
            patient::create($p);
        }
    }
}
