<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaSistema extends Model
{
    protected $table = 'empresa_sistemas';
    protected $fillable = [
        'empresa',
        'cnpj',
        'endereco',
        'cep',
        'responsavel',
        'telefone',
        'email',
        'logo',
    ];

    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }


}
