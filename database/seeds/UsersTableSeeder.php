<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=User::create([
        	'name'=>'Ko Ko',
        	'profile'=>'images/user/admin.png',
        	'email'=>'admin@gmail.com',
        	'password'=>Hash::make('123456789'),
        	'phone'=>'09981204437',
            'township'=>'Botahtaung'
        ]);
       $admin->assignRole('admin');
         $customer=User::create([
        	'name'=>'Snow',
        	'profile'=>'images/user/customer.jpg',
        	'email'=>'snow@gmail.com',
        	'password'=>Hash::make('123456789'),
        	'phone'=>'09981204437',
            'township'=>'Hlaing'
        ]);
        $customer->assignRole('customer');
    }
}
