<?php

namespace Database\Seeders;

use App\Models\Tarefa;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

     //   User::factory()->create([
     //       'name' => 'Test User',
     //       'email' => 'test@example.com',
     //   ]);
     Tarefa::insert([
            [
                "texto" => "Preparar o café da manhã"
            ],
            [
                "texto" => "Verificar a agenda e e-mails"
            ],
            [
                "texto" => "Levar as crianças para a escola (se aplicável)"
            ],
            [
                "texto" => "Fazer uma pausa de 15 minutos e alongar"
            ],
            [
                "texto" => "Almoçar e hidratar-se"
            ],
            [
                "texto" => "Responder a chamadas e mensagens importantes"
            ],
            [
                "texto" => "Lavar a louça ou organizar a cozinha"
            ],
            [
                "texto" => "Planejar as tarefas do dia seguinte"
            ],
            [
                "texto" => "Caminhar com o cachorro (se tiver)"
            ],
            [
                "texto" => "Ler um livro ou assistir algo relaxante"
            ],
            [
                "texto" => "Jantar e passar tempo com a família"
            ],
            [
                "texto" => "Arrumar a cama e o quarto"
            ],
            [
                "texto" => "Escovar os dentes e fazer a higiene noturna"
            ]
    ]);
}
}