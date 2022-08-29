<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ucesnik;

class Takmicenje extends Model
{
    use HasFactory;

    public function ucesnici()
    {
        return $this->hasMany(Ucesnik::class);
    }
}
