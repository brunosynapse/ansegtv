<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Green Building',
            'path' => 'green-building',
            'color' => '#547d31'
        ]);

        Category::create([
            'name' => 'Saneamento Básico',
            'path' => 'saneamento-basico',
            'color' => '#00c3c9'
        ]);

        Category::create([
            'name' => 'Reabilitação de Áreas Contaminadas',
            'path' => 'reabilitacao-areas-contaminadas',
            'color' => '#d6ac70'
        ]);

        Category::create([
            'name' => 'Qualidade de Vida',
            'path' => 'qualidade-de-vida',
            'color' => '#ffc138'
        ]);

        Category::create([
            'name' => 'Desenvolvimento Econômico e Proteção do Meio Ambiente',
            'path' => 'economia-e-protecao-ambiental',
            'color' => '#585c41'
        ]);

        Category::create([
            'name' => 'Poluição Ambiental e Qualidade do Ar',
            'path' => 'poluicao-ambiental-qualidade-ar',
            'color' => '#cf865d'
        ]);

        Category::create([
            'name' => 'Desenvolvimento Imobiliário e Urbanístico',
            'path' => 'desenvolvimento-imobiliario-urbanistico',
            'color' => '#95928d'
        ]);

        Category::create([
            'name' => 'Áreas Verdes e Urbanas',
            'path' => 'areas-verdes-e-urbanas',
            'color' => '#6bb753'
        ]);

        Category::create([
            'name' => 'Lixo e Resíduos Sólidos',
            'path' => 'lixo-residuos-solidos',
            'color' => '#5f4e3a'
        ]);

        Category::create([
            'name' => 'Entrevista',
            'path' => 'entrevista',
            'color' => '#999'
        ]);
    }
}
