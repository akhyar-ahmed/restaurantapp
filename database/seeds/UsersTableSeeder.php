<?php

use Illuminate\Database\Seeder;
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
        $data = [
            [
                'name' => "Nabil",
                'email' => "nabilkeya@gmail.com",
                'temp_pass' => "secret",
                'password' => bcrypt('secret'),
                'address' => "Shubidbazar, Sylhet-3100",
                'Phone' => "017jhdgbhj",
                'sup_admin' => '0',
                'type' => '1'
            ],

            [
                'name' => "Akhyar",
                'email' => "akhyar@gmail.com",
                'temp_pass' => "ibnatraisa",
                'password' =>  bcrypt('ibnatraisa'),
                'address' => "Mejortilla, Sylhet-3100",
                'Phone' => "01686477544",
                'sup_admin' => '1',
                'type' => '1'
            ],

            [
                'name' => "Mr. X",
                'email' => "xxx@gmail.com",
                'temp_pass' => "secret",
                'password' => bcrypt('secret'),
                'address' => "Chowhatta, Sylhet-3100",
                'Phone' => "01816xxxxxx",
                'sup_admin' => '0',
                'type' => '1'
            ],
            
            [
                'name' => "Mr. Y",
                'email' => "yyy@gmail.com",
                'temp_pass' => "secret",
                'password' => bcrypt('secret'),
                'address' => "Shubidbazar, Sylhet-3100",
                'Phone' => "017jhdgbhj",
                'sup_admin' => '0',
                'type' => '1'
            ],

            [
                'name' => "Mr. Z",
                'email' => "zzz@gmail.com",
                'temp_pass' => "secret",
                'password' => bcrypt('secret'),
                'address' => "Shubidbazar, Sylhet-3100",
                'Phone' => "017jhdgbhj",
                'sup_admin' => '0',
                'type' => '0'
            ]

        ];
        
        foreach($data as $data)
        {
            User::forceCreate($data);
        }
        
    }
}