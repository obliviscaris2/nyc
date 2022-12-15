<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $table = 'site_settings';
    // protected $fillable =[
    //     'govn_name',
    //     'ministry_name',
    //     'department_name',
    //     'office_name',
    //     'office_address',
    //     'office_contact',
    //     'office_mail',
    //     'main_logo',
    //     'side_logo',
    //     'face_link',
    //     'insta_link',
    //     'social_link'
    // ];
  
}
