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
                'password' => bcrypt('secret'),
                'admin' => '1'
            ],

            [
                'name' => "Akhyar",
                'email' => "akhyar@gmail.com",
                'password' =>  bcrypt('secret'),
                'admin' => '1'
            ],

            [
                'name' => "Mr. X",
                'email' => "xxx@gamil.com",
                'password' => bcrypt('secret'),
                'admin' => '0'
            ],
            
            [
                'name' => "Mr. Y",
                'email' => "yyy@gamil.com",
                'password' => bcrypt('secret'),
                'admin' => '0'
            ],

            [
                'name' => "Mr. Z",
                'email' => "zzz@gamil.com",
                'password' => bcrypt('secret'),
                'admin' => '0'
            ]

        ];
        
        foreach($data as $data)
        {
            User::forceCreate($data);
        }
        
    }
}