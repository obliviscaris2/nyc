<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SitesettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteSetting::create([
            'govn_name' => 'Nepal Government',
            'ministry_name' => 'Ministry Name',
            'department_name' => 'Department Name',
            'office_name' => 'Office Name',
            'office_address' => 'Office Address',
            'office_contact' => 'Office Contact',
            'office_mail' => 'officemail@gmail.com',
            'main_logo' => '',
            'side_logo' => '',
            'face_link' => 'https://www.facebook.com/',
            'insta_link' => 'https://www.instagram.com/',
            'social_link' => 'https://www.social.com/',
        ]);

    }
}
