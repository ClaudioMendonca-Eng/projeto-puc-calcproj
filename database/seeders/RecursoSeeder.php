<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Recurso::create([
            'empresasistema_id' => 1,
            'tipo_id' => 1,
            'nome' => 'Recurso 1',
            'custohora' => 10.00,
            'equipamentovida' => 5,
        ]);
    }
}
