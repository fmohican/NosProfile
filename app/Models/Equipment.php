<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = [
        "item",
        "image",
        "slot",
        "characters",
        "account",
        "hidden"
    ];

    public function item() {
        return $this->hasOne(Items::class, 'id', 'item')->first();
    }
}
