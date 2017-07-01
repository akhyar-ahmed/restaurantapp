<?php

use Illuminate\Database\Seeder;
use App\Model\Items;

class ItemsTableSeeder extends Seeder
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
                'name' => "Burger",
                'stock' => '100',
                'code' => "f-01",
                'base_price' => '1.00'
            ],

            [
                'name' => "Hot Dog",
                'stock' => '75',
                'code' => "f-02",
                'base_price' => '2.00'
            ],

            [
                'name' => "Cold Coffee",
                'stock' => '200',
                'code' => "c-01",
                'base_price' => '00.50'
            ],

            [
                'name' => "Fried Rice",
                'stock' => '200',
                'code' => "m-10",
                'base_price' => '5.00'
            ]
        ];

        foreach($data as $data)
        {
            Items::forceCreate($data);
        }

    }
}
