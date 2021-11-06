<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'account',
        'family',
        'level',
        'clevel',
        'gender',
        'classes',
        'server',
        'slug',
        'image',
        'background',
    ];
}
