<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;
    use Sluggable;

    public function sluggable() : array
    {
        return [
            'slug' => [
                'source' => 'vid_desc',
            ]
            ];
    }
    protected $table = 'videos';
}
