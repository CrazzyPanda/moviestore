<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin    = Role::where('name', 'admin')->first();

        $admin = new User();
        $admin->name = 'Jacea';
        $admin->email = 'Jacea@gmail.com';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);

    }
}
