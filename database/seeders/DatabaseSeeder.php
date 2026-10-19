<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::disk('public')->put('patient.png', config('app.url').'images/patient.png');
        Storage::disk('public')->put('doctor.png', config('app.url').'images/doctor.png');

        $this->call(RoleSeeder::class);

        // Indian Administrator account
        User::create([
            'name' => 'Mitesh Patel',
            'email' => 'admin@hospital.com',
            'password' => bcrypt('admin123'),
            'role_id' => 1,
            'created_at' => now(),
        ]);

        // Keep default admin login as well
        User::create([
            'name' => 'Hospital Admin',
            'email' => 'tauseed@test.com',
            'password' => bcrypt('tauseed'),
            'role_id' => 1,
            'created_at' => now(),
        ]);

        User::create([
            'name' => 'Ketan Trivedi (Accounts)',
            'email' => 'accountant@hospital.com',
            'password' => bcrypt('accountant123'),
            'role_id' => 2,
            'created_at' => now(),
        ]);

        $this->call([
            SettingSeeder::class,
            employeeSeeder::class,
            doctorSeeder::class,
            HodSeeder::class,
            blockSeeder::class,
            departmentSeeder::class,
            patientSeeder::class,
            roomSeeder::class,
            bedsSeeder::class,
            medicineSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
