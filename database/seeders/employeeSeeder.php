<?php

namespace Database\Seeders;
use App\Models\employee;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = [
            ['name' => 'Dr. Rajesh Mehta', 'email' => 'dr.rajesh.mehta@lifecarehospitalrajkot.com', 'phone' => '+91 98251 44521', 'salary' => '175000', 'address' => 'Kalawad Road, Near KKV Hall, Rajkot', 'qualification' => 'MBBS, MD (Cardiology)', 'position' => 'doctor', 'status' => 'active', 'image' => 'images/doctor_01.jpg'],
            ['name' => 'Dr. Hetal Patel', 'email' => 'dr.hetal.patel@lifecarehospitalrajkot.com', 'phone' => '+91 98252 88314', 'salary' => '160000', 'address' => '150 Feet Ring Road, Near Raiya Circle, Rajkot', 'qualification' => 'MBBS, MS (Gynecology & Obstetrics)', 'position' => 'doctor', 'status' => 'active', 'image' => 'images/doctor_02.jpg'],
            ['name' => 'Dr. Jayesh Dave', 'email' => 'dr.jayesh.dave@lifecarehospitalrajkot.com', 'phone' => '+91 98253 12908', 'salary' => '155000', 'address' => 'Amin Marg, Akshar Marg Corner, Rajkot', 'qualification' => 'MBBS, MS (Orthopedic Surgery)', 'position' => 'doctor', 'status' => 'active', 'image' => 'images/doctor_03.jpg'],
            ['name' => 'Dr. Amit Vora', 'email' => 'dr.amit.vora@lifecarehospitalrajkot.com', 'phone' => '+91 98254 77123', 'salary' => '140000', 'address' => 'Yagnik Road, Near Jagnath Temple, Rajkot', 'qualification' => 'MBBS, MD (Pediatrics)', 'position' => 'doctor', 'status' => 'active', 'image' => 'images/doctor_01.jpg'],
            ['name' => 'Dr. Bhavna Joshi', 'email' => 'dr.bhavna.joshi@lifecarehospitalrajkot.com', 'phone' => '+91 98255 33490', 'salary' => '130000', 'address' => 'Kotecha Chowk, Nirmala Road, Rajkot', 'qualification' => 'MBBS, MD (General Medicine)', 'position' => 'doctor', 'status' => 'active', 'image' => 'images/doctor_02.jpg'],
            ['name' => 'Dr. Sanjay Trivedi', 'email' => 'dr.sanjay.trivedi@lifecarehospitalrajkot.com', 'phone' => '+91 98256 99012', 'salary' => '165000', 'address' => 'University Road, Near Indira Circle, Rajkot', 'qualification' => 'MBBS, MS (General & Laparoscopic Surgery)', 'position' => 'doctor', 'status' => 'active', 'image' => 'images/doctor_03.jpg'],
            ['name' => 'Dr. Nirav Radadiya', 'email' => 'dr.nirav.radadiya@lifecarehospitalrajkot.com', 'phone' => '+91 98257 66234', 'salary' => '180000', 'address' => 'Mavdi Main Road, Rajkot', 'qualification' => 'MBBS, DNB (Neurology)', 'position' => 'doctor', 'status' => 'active', 'image' => 'images/doctor_01.jpg'],
            ['name' => 'Dr. Pooja Doshi', 'email' => 'dr.pooja.doshi@lifecarehospitalrajkot.com', 'phone' => '+91 98258 55432', 'salary' => '145000', 'address' => 'Nana Mava Road, Rajkot', 'qualification' => 'MBBS, DMRD (Radiology)', 'position' => 'doctor', 'status' => 'active', 'image' => 'images/doctor_02.jpg'],
        ];

        foreach ($doctors as $doc) {
            employee::create($doc);
        }

        $nurses = [
            ['name' => 'Bhavna Makwana', 'email' => 'bhavna.m@lifecarehospitalrajkot.com', 'phone' => '+91 97121 23401', 'salary' => '32000', 'address' => 'Kothariya Road, Rajkot', 'qualification' => 'B.Sc (Nursing)', 'position' => 'nurse', 'status' => 'active', 'image' => 'images/patient.png'],
            ['name' => 'Rekha Parmar', 'email' => 'rekha.p@lifecarehospitalrajkot.com', 'phone' => '+91 97122 34502', 'salary' => '30000', 'address' => 'Aji Dam Road, Rajkot', 'qualification' => 'GNM Nursing', 'position' => 'nurse', 'status' => 'active', 'image' => 'images/patient.png'],
            ['name' => 'Meena Chavda', 'email' => 'meena.c@lifecarehospitalrajkot.com', 'phone' => '+91 97123 45603', 'salary' => '35000', 'address' => 'Mavdi Main Road, Rajkot', 'qualification' => 'Post Basic B.Sc Nursing', 'position' => 'nurse', 'status' => 'active', 'image' => 'images/patient.png'],
            ['name' => 'Jyoti Vaghela', 'email' => 'jyoti.v@lifecarehospitalrajkot.com', 'phone' => '+91 97124 56704', 'salary' => '28000', 'address' => 'Pedak Road, Rajkot', 'qualification' => 'GNM Nursing', 'position' => 'nurse', 'status' => 'active', 'image' => 'images/patient.png'],
            ['name' => 'Sangeeta Rathod', 'email' => 'sangeeta.r@lifecarehospitalrajkot.com', 'phone' => '+91 97125 67805', 'salary' => '31000', 'address' => 'Gandhigram, Rajkot', 'qualification' => 'B.Sc (Nursing)', 'position' => 'nurse', 'status' => 'active', 'image' => 'images/patient.png'],
            ['name' => 'Shilpa Solanki', 'email' => 'shilpa.s@lifecarehospitalrajkot.com', 'phone' => '+91 97126 78906', 'salary' => '29000', 'address' => 'University Road, Rajkot', 'qualification' => 'GNM Nursing', 'position' => 'nurse', 'status' => 'active', 'image' => 'images/patient.png'],
        ];

        foreach ($nurses as $nurse) {
            employee::create($nurse);
        }

        $otherStaff = [
            ['name' => 'Alpesh Bhatt', 'email' => 'pharmacy.head@lifecarehospitalrajkot.com', 'phone' => '+91 98980 11223', 'salary' => '45000', 'address' => 'Tagore Road, Rajkot', 'qualification' => 'M.Pharm, B.Pharm', 'position' => 'pharmacist', 'status' => 'active', 'image' => 'images/doctor.png'],
            ['name' => 'Dharmesh Kothari', 'email' => 'dharmesh.pharmacy@lifecarehospitalrajkot.com', 'phone' => '+91 98981 22334', 'salary' => '35000', 'address' => 'Dhebar Road, Rajkot', 'qualification' => 'B.Pharm', 'position' => 'pharmacist', 'status' => 'active', 'image' => 'images/doctor.png'],
            ['name' => 'Ketan Trivedi', 'email' => 'accounts@lifecarehospitalrajkot.com', 'phone' => '+91 98982 33445', 'salary' => '50000', 'address' => 'Panchvati Society, Rajkot', 'qualification' => 'M.Com, Inter CA', 'position' => 'accountant', 'status' => 'active', 'image' => 'images/doctor.png'],
            ['name' => 'Manish Sanghavi', 'email' => 'billing@lifecarehospitalrajkot.com', 'phone' => '+91 98983 44556', 'salary' => '38000', 'address' => 'Raiya Road, Rajkot', 'qualification' => 'B.Com, Tally ERP', 'position' => 'accountant', 'status' => 'active', 'image' => 'images/doctor.png'],
            ['name' => 'Riddhi Shukla', 'email' => 'reception.front@lifecarehospitalrajkot.com', 'phone' => '+91 98984 55667', 'salary' => '25000', 'address' => 'Nirmala Convent Road, Rajkot', 'qualification' => 'BBA (Hospitality)', 'position' => 'receptionist', 'status' => 'active', 'image' => 'images/patient.png'],
            ['name' => 'Kinjal Vyas', 'email' => 'opd.desk@lifecarehospitalrajkot.com', 'phone' => '+91 98985 66778', 'salary' => '24000', 'address' => 'Nana Mava Road, Rajkot', 'qualification' => 'BA, English & Computer', 'position' => 'receptionist', 'status' => 'active', 'image' => 'images/patient.png'],
            ['name' => 'Ramesh Chudasama', 'email' => 'security.head@lifecarehospitalrajkot.com', 'phone' => '+91 98986 77889', 'salary' => '20000', 'address' => 'Mavdi Area, Rajkot', 'qualification' => 'HSC Passed (Ex-Army)', 'position' => 'security', 'status' => 'active', 'image' => 'images/doctor.png'],
            ['name' => 'Devjibhai Parmar', 'email' => 'housekeeping@lifecarehospitalrajkot.com', 'phone' => '+91 98987 88990', 'salary' => '16000', 'address' => 'Aji GIDC, Rajkot', 'qualification' => 'SSC Passed', 'position' => 'cleaner', 'status' => 'active', 'image' => 'images/doctor.png'],
        ];

        foreach ($otherStaff as $staff) {
            employee::create($staff);
        }
    }
}
