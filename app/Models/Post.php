<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use Sluggable;
    use HasFactory;
    public $timestamps = true;

    public function get_categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'posts_categories');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source'  => 'title',
            ]
            ];
    }

    // public function category(){
    //     return $this->hasMany(Category::class,'id', 'cateory_id');
    // }

    // public function str_to_url($url){
    //     $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
    //     $url = trim($url, "-");
    //     $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
    //     $url = strtolower($url);
    //     $url = preg_replace('~[^-a-z0-9_]+~', '', $url);
    //     return $url;
    // }

    // 
}
