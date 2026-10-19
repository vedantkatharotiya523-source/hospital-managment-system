<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'key' => 'title',
                'value' => 'Lifecare Super Speciality Hospital - Rajkot'
            ],
            [
                'key' => 'business_email',
                'value' => 'contact@lifecarehospitalrajkot.com'
            ],
            [
                'key' => 'address',
                'value' => 'Opp. KKV Hall, 150 Feet Ring Road, Kalawad Road Corner, Rajkot, Gujarat - 360005'
            ],
            [
                'key' => 'business_phone',
                'value' => '+91 98250 12345'
            ],
            [
                'key' => 'working_horse',
                'value' => '24x7 Emergency | OPD: 08:30 AM - 09:00 PM'
            ],
            [
                'key' => 'description',
                'value' => 'Lifecare Super Speciality Hospital is a premier healthcare institution in Rajkot, Gujarat, delivering world-class medical treatments, advanced surgeries, and 24x7 emergency care with utmost compassion and excellence.'
            ],
            [
                'key' => 'logo',
                'value' => 'logo.png'
            ],
            [
                'key' => 'icon',
                'value' => 'icon-logo.png'
            ],
            [
                'key' => 'facebook',
                'value' => 'https://facebook.com/lifecarehospitalrajkot'
            ],
            [
                'key' => 'twitter',
                'value' => 'https://twitter.com/lifecarerajkot'
            ],
            [
                'key' => 'instagram',
                'value' => 'https://instagram.com/lifecarerajkot'
            ],
            [
                'key' => 'linkedin',
                'value' => 'https://linkedin.com/company/lifecarehospitalrajkot'
            ],
            [
                'key' => 'youtube',
                'value' => 'https://youtube.com/lifecarehospitalrajkot'
            ],
            [
                'key' => 'pinterest',
                'value' => '#'
            ]
        ];

        foreach ($settings as $setting) {
            \App\Models\Settings::firstOrCreate($setting);
        }
    }
}
