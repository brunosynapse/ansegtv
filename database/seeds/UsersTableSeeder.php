<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        ])->assignRole('admin');
    }
}
