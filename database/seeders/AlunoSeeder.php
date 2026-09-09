<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Aluno::create([
                'nome' => "Aluno $i",
                'email' => "aluno$i@email.com",
                'curso' => "Curso Exemplo",
            ]);
        }
    }
}