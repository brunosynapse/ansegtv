<?php

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'name' => 'Publicado',
        ]);
        Status::create([
            'name' => 'Pendente',
        ]);
        Status::create([
            'name' => 'Rascunho',
        ]);
    }
}
