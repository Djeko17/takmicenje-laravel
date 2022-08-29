<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ucesnik;

class Takmicenje extends Model
{
    use HasFactory;

    protected $fillable = [
        'drzava',
        'naziv',
        'godina',
        'instagram'
    ];

    public function ucesnici()
    {
        return $this->hasMany(Ucesnik::class);
    }
}
