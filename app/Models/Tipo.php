<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $fillable = [
        'nome',
        'tipo',
        'contratotipo'
    ];

    public function recursos()
    {
        return $this->hasMany(Recurso::class);
    }



}
