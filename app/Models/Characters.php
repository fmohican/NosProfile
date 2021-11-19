<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Characters extends Model
{
    use HasFactory, SoftDeletes;

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

    public function server() {
        return $this->hasOne(Server::class, 'id', 'server');
    }

    public function account() {
        return $this->hasOne(User::class, 'id', 'account');
    }

    public function equipmentAll() {
        return $this->hasMany(Equipment::class, 'id', 'id');
    }

    public function equipment($slot) {
        return $this->hasMany(Equipment::class, 'id', 'id')->where('slot', $slot);
    }
}
