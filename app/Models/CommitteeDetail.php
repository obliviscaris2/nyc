<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommitteeDetail extends Model
{
    use HasFactory;

    protected $fillable = ['district', 'name', 'address', 'phone'];
}
