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
            'name' => 'secovi',
            'email' => 'changeme@cidadesemeioambiente.com.br',
            'password' => bcrypt('123456'),
        ])->assignRole('admin');
    }
}
