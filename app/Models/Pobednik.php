<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Takmicenje;

class Pobednik extends Model
{
    use HasFactory;

    protected $fillable = [
        'takmicenje_id',
        'ucesnik_id',
    ];

    public function takmicenje()
    {
        return $this->belongsTo(Takmicenje::class);
    }

    public function ucesnik()
    {
        return $this->belongsTo(Ucesnik::class);
    }
}
