<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
//        factory(User::class, 10)-> create();

        User::create([
            'name' => 'secovi',
            'email' => 'changeme@cidadesemeioambiente.com.br',
            'password' => bcrypt('123456'),
        ]);
    }
}
