<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $fillable = [
        'projeto_id',
        'versao',
        'status_orcamento',
        'comissao',
        'margem_lucro',
        'fiscal',
        'data_vencimento',
        'investimento',
        'prazo'
    ];

    public function projetos()
    {
        return $this->belongsTo(Projeto::class);
    }

    public function recursos()
    {
        return $this->belongsToMany(Recurso::class, 'orcamento_recurso', 'orcamento_id', 'recurso_id');
    }
}
