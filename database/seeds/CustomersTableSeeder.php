<?php

use Illuminate\Database\Seeder;
use App\Customer;
use App\Role;
use App\User;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_customer = Role::where('name', 'customer')->first();

        $customer_user = new User();
        $customer_user->name = 'Grace Cautley';
        $customer_user->email = 'grace@gmail.com';
        $customer_user->password = bcrypt('secret');
        $customer_user->save();
        $customer_user->roles()->attach($role_customer);

        $customer = new Customer();
        $customer->addressLine1 = "1 Main Street";
        $customer->addressLine2 = "Roseland";
        $customer->town = "Bray";
        $customer->county = "Wicklow";
        $customer->nameOnCard = "Grace Cautley";
        $customer->cardNumber = "0123456789012345";
        $customer->expiryDate = "12/20";
        $customer->cvv = "146";
        $customer->user_id = $customer_user->id;
        $customer->save();

        $customer_user = new User();
        $customer_user->name = "Hosh Hoo";
        $customer_user->email = 'hosh@gmail.com';
        $customer_user->password = bcrypt('secret');
        $customer_user->save();
        $customer_user->roles()->attach($role_customer);

        $customer = new Customer();
        $customer->addressLine1 = "2 Main Street";
        $customer->addressLine2 = "Roseland";
        $customer->town = "Bray";
        $customer->county = "Wicklow";
        $customer->nameOnCard = "Hosh Hoo";
        $customer->cardNumber = "1123456789012345";
        $customer->expiryDate = "11/22";
        $customer->cvv = "001";
        $customer->user_id = $customer_user->id;
        $customer->save();
    }
}
