<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = new Role();
      $admin->name = 'admin';
      $admin->description = "An administrator";
      $admin->save();

      $admin = new Role();
      $admin->name = 'customer';
      $admin->description = "A customer";
      $admin->save();

    }
}
