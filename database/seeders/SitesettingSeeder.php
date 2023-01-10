<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteSetting::create([
            'govn_name' => 'Government of Nepal',
            'ministry_name' => 'Ministry of Youth and Sports',
            'department_name' => 'Ministry of Youth and Sports',
            'office_name' => 'National Youth Council',
            'office_address' => 'Sanothimi, Bhaktapur',
            'office_contact' => '6635133',
            'office_mail' => 'info@nyc.gov.np',
            'main_logo' => 'uploads/sitesetting/main_logo.png',
            'side_logo' => 'uploads/sitesetting/side_logo.jpg',
            'flag_logo' => 'uploads/sitesetting/flag_logo.gif',
            'face_link' => 'https://www.facebook.com/nationalyouthcouncilnepal/',
            'insta_link' => 'https://www.instagram.com/',
            'social_link' => 'https://www.social.com/',
        ]);
    }
}
