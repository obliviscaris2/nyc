<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team')->insert([
            [
                'name' => 'Ramakant Sharma',
                'position' => 'Administrative Chief',
                'role' => 'Administrative Chief',
                'image'=> 'uploads/team/ramakant.jpg',
                'email' => 'sharma.ramakanta@gmail.com',
                'contact_number' => '9855064451',
            ],
            [
                'name' => 'Dinesh Ghimire',
                'position' => 'Under Secretary',
                'role' => 'Under Secretary',
                'image'=> 'uploads/team/dinesh.jpg',
                'email' => 'dghimire72@gmail.com',
                'contact_number' => '9851211483',
            ],
            [
                'name' => 'Chandra Thapa',
                'position' => 'Under Secretary',
                'role' => 'Under Secretary',
                'image'=> 'uploads/team/chandra.jpg',
                'email' => 'chandathapa02@gmail.com',
                'contact_number' => '9841358839',
            ],
            [
                'name' => 'Kamala Gyawali',
                'position' => 'Under Secretary',
                'role' => 'Under Secretary',
                'image'=> 'uploads/team/kamala.jpg',
                'email' => 'kgyawali123@gmail.com',
                'contact_number' => '9841777074',
            ],
            [
                'name' => 'Shanti Ram Poudel',
                'position' => 'Under Secretary',
                'role' => 'Under Secretary',
                'image'=> 'uploads/team/shanti.jpg',
                'email' => 'info@nyc.gov.np',
                'contact_number' => '9861999301',
            ],
            [
                'name' => 'Ashok Parajuli',
                'position' => 'Section Officer',
                'role' => 'Section Officer',
                'image'=> 'uploads/team/ashok.jpg',
                'email' => 'aparajuli8@gmail.com',
                'contact_number' => '9841773715',
            ],
            [
                'name' => 'Sunita Karki',
                'position' => 'Account Officer',
                'role' => 'Account Officer',
                'image'=> 'uploads/team/sunita.jpg',
                'email' => 'sunita.jiri@gmail.com',
                'contact_number' => '9841478525',
            ],
            [
                'name' => 'Kalpana Khanal Basnet',
                'position' => 'Section Officer',
                'role' => 'Section Officer',
                'image'=> 'uploads/team/kalpana.jpg',
                'email' => 'mailtokhanalkalpana@gmail.com',
                'contact_number' => '9841606231',            
            ],
            [
                'name' => 'Khulanath Gautam',
                'position' => 'Section Officer',
                'role' => 'Section Officer',
                'image'=> 'uploads/team/khulanath.jpg',
                'email' => 'khulanathgtm@yahoo.com',
                'contact_number' => '9841415745',            
            ],
            [
                'name' => 'Chandrawoti Koirala',
                'position' => 'Deputy Executive Officer',
                'role' => 'Deputy Executive Officer',
                'image'=> 'uploads/team/chandrawoti.jpg',
                'email' => 'cwkoirala22@gmail.com',
                'contact_number' => '9849220278',           
            ],
            [
                'name' => 'Durga Giri',
                'position' => 'Deputy Executive Officer',
                'role' => 'Deputy Executive Officer',
                'image'=> 'uploads/team/durga.jpg',
                'email' => 'durgagiri28@gmail.com',
                'contact_number' => '9844724628',           
            ],
            [
                'name' => 'Rani Kumari Mallik',
                'position' => 'Technical Assistant',
                'role' => 'Technical Assistant',
                'image'=> 'uploads/team/rani.jpg',
                'email' => 'ranukam123@gmail.com',
                'contact_number' => '9841539741',       
            ],
            [
                'name' => 'Pushpa Dahal',
                'position' => 'Accountant',
                'role' => 'Accountant',
                'image'=> 'uploads/team/pushpa.jpg',
                'email' => 'apushpaa1234@gmail.com',
                'contact_number' => '9842494428',           
            ],
            [
                'name' => 'Mira Kafle',
                'position' => 'Computer Operator',
                'role' => 'Computer Operator',
                'image'=> 'uploads/team/mira.jpg',
                'email' => 'mira.kafle@gmail.com',
                'contact_number' => '9843639407',      
            ],

            [
                'name' => 'Apsara Koirala',
                'position' => 'Computer Operator',
                'role' => 'Computer Operator',
                'image'=> 'uploads/team/apsara.jpg',
                'email' => 'apsarakoirala32@gmail.com',
                'contact_number' => '9849353262',          
            ],
            [
                'name' => 'Naresh Maharjan',
                'position' => 'Driver',
                'role' => 'Driver',
                'image'=> 'uploads/team/naresh.jpg',
                'email' => 'info@nyc.gov.np',
                'contact_number' => '9860468088',         
            ],
            [
                'name' => 'Gokul Bhujel',
                'position' => 'Driver',
                'role' => 'Driver',
                'image'=> 'uploads/team/gokul.jpg',
                'email' => 'info@nyc.gov.np',
                'contact_number' => '9841482427',          
            ],
            [
                'name' => 'Laxmi Rai',
                'position' => 'Office Helper',
                'role' => 'Office Helper',
                'image'=> 'uploads/team/laxmi.jpg',
                'email' => 'info@nyc.gov.np',
                'contact_number' => '9841703324', 
            ],
            [
                'name' => 'Prem Kumari Khatri',
                'position' => 'Office Helper',
                'role' => 'Office Helper',
                'image'=> 'uploads/team/prem.jpg',
                'email' => 'info@nyc.gov.np',
                'contact_number' => '9847910005',         
            ],

            [
                'name' => 'Sarita Karki',
                'position' => 'Office Helper',
                'role' => 'Office Helper',
                'image'=> 'uploads/team/sarita.jpg',
                'email' => 'info@nyc.gov.np',
                'contact_number' => '9849816921',
            ],


        ]);
    }
}
