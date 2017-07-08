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
                'name' => 'Sadul Hasan Tarek',
                'phone' => '01673956622',
                'address' => 'Dakshin, Kajol-Shah, Medical Road, Sylhet'
            ],

            [
                'name' => 'Arafat Rony',
                'phone' => '01686477544',
                'address' => 'Kaji Elias, Zindabazar, Sylhet'
            ]
        ];

        foreach($data as $data)
        {
            Customers::forceCreate($data);
        }
    }
}
