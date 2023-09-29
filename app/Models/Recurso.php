<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recurso extends Model
{

    protected $fillable = [
        'empresasistema_id',
        'tipo_id',
        'nome',
        'custohora',
        'equipamentovida'
    ];

    public function empresasistemas()
    {
        return $this->belongsTo(EmpresaSistema::class);
    }

    public function tipos()
    {
        return $this->belongsTo(Tipo::class);
    }

}
