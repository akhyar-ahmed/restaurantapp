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
                'type' => '1'
            ],

            [
                'name' => "Akhyar",
                'email' => "akhyar@gmail.com",
                'password' =>  bcrypt('secret'),
                'type' => '1'
            ],

            [
                'name' => "Mr. X",
                'email' => "xxx@gmail.com",
                'password' => bcrypt('secret'),
                'type' => '0'
            ],
            
            [
                'name' => "Mr. Y",
                'email' => "yyy@gmail.com",
                'password' => bcrypt('secret'),
                'type' => '0'
            ],

            [
                'name' => "Mr. Z",
                'email' => "zzz@gmail.com",
                'password' => bcrypt('secret'),
                'type' => '0'
            ]

        ];
        
        foreach($data as $data)
        {
            User::forceCreate($data);
        }
        
    }
}