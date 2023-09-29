<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = [
        'nome',
        'resumo',
        'descricao',
        'tags',
    ];

    public function clientes()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function tipos()
    {
        return $this->belongsToMany(Tipo::class, 'projeto_tipo', 'projeto_id', 'tipo_id');
    }

}
