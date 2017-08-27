<?php

use Illuminate\Database\Seeder;
use App\Model\Customers;

class CustomersTableSeeder extends Seeder
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
                'first_name' => "Sadul hasan",
                'last_name' => "tarek",
                'phone' => '01673956622',
                'address_one' => 'Dakshin, Kajol-Shah, Medical Road, Sylhet',
                'address_two' => 'Dakshin, Kajol-Shah, Medical Road, Sylhet',
                'zip' => '3100'
            ],

            [
                'first_name' => "Arafat",
                'last_name' => 'rony',
                'phone' => '01686477544',
                'address_one' => 'Zindabazar, Sylhet',
                'address_two' => 'Kaji Elias, Sylhet',
                'zip' => '3100'
            ]
        ];

        foreach($data as $data)
        {
            Customers::forceCreate($data);
        }
    }
}
