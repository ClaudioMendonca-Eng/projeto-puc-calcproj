<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'empresa',
        'cnpj',
        'endereco',
        'cep',
        'email',
        'telefone',
        'responsavel',
        'logo',
        'ativo',
    ];

    protected $casts = [
        'ativo' => 'boolean',
        'email_verified_at' => 'datetime',
    ];

    public function empresaSistemas()
    {
        return $this->belongsTo(EmpresaSistema::class);
    }

    public function projetos()
    {
        return $this->hasMany(Projeto::class);
    }


}
