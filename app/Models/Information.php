<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Information extends Model
{
    use HasFactory;
    use Sluggable;

    public function sluggable() : array
    {
        return [
            'slug' => [
                'source' => 'title',
            ]
            ];
    }
}
