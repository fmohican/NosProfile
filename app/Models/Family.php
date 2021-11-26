<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $fillable = [
        "uuid",
        "slug",
        "name",
        "description",
        "web",
        "name",
        "discord",
        "server",
        "head",
        "deputy_one",
        "deputy_two",
    ];

    protected $hidden = [
        "uuid",
        "id",
    ];

    public function head() {
        $this->hasOne(Characters::class, "id", "head");
    }

    public function deputy_one() {
        $this->hasOne(Characters::class, "id", "deputy_one");
    }

    public function deputy_two() {
        $this->hasOne(Characters::class, "id", "deputy_two");
    }

    public function server() {
        $this->hasOne(Server::class, "id", "server");
    }
}
