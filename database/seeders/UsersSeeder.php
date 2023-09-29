<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Criando um usuário administrador

        \App\Models\User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
            'funcao' => 'Administrador',
            'access_level' => 'admin',
        ]);

        \App\Models\User::create([
            'name' => 'Carlos Mendes',
            'email' => 'mendes.carlos@asterisco.com',
            'password' => bcrypt('12345678'),
            'funcao' => 'Supervisor de Orçamentos',
            'access_level' => 'admin',
        ]);

        \App\Models\User::create([
            'name' => 'Priscila Ramos',
            'email' => 'ramos.priscila@asterisco.com',
            'password' => bcrypt('12345678'),
            'funcao' => 'Administração',
            'access_level' => 'user',
        ]);

        \App\Models\User::create([
            'name' => 'Carolina Barros',
            'email' => 'barros.carolina@asterisco.com',
            'password' => bcrypt('12345678'),
            'funcao' => 'Dev. FrontEnd - Mobile Pleno',
            'access_level' => 'user',
        ]);

        \App\Models\User::create([
            'name' => 'Laerte Macedo',
            'email' => 'macedo.laerte@asterisco.com',
            'password' => bcrypt('12345678'),
            'funcao' => 'Dev. FrontEnd - Pleno Angular',
            'access_level' => 'user',
        ]);

        \App\Models\User::create([
            'name' => 'Rafaela Silva',
            'email' => 'silva.rafael@asterisco.com',
            'password' => bcrypt('12345678'),
            'funcao' => 'Dev. BackEnd - Pleno Java',
            'access_level' => 'user',
        ]);

        \App\Models\User::create([
            'name' => 'Renata Borges',
            'email' => 'borges.renata@asterisco.com',
            'password' => bcrypt('12345678'),
            'funcao' => 'Dev. BackEnd - Pleno Java',
            'access_level' => 'user',
        ]);
        }


}
