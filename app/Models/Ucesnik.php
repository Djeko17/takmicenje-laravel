<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Takmicenje;
use App\Models\Pobednik;

class Ucesnik extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime_prezime',
        'umetnicko_ime',
        'drzava',
        'godine'
    ];

    public function takmicenja()
    {
        return $this->hasMany(Takmicenje::class);
    }

    public function pobednici()
    {
        return $this->hasMany(Pobednik::class);
    }
}
