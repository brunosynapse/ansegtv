<?php

use App\Enums\UserType;
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
        User::create([
            'name' => 'Synapse Brasil',
            'email' => 'synapse@ansegtv.com.br',
            'password' => bcrypt('synapse@123'),
        ])->assignRole(UserType::ADMIN);
    }
}
