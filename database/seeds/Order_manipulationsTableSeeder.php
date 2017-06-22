<?php

use Illuminate\Database\Seeder;
use App\Model\Order_manipulations;

class Order_manipulationsTableSeeder extends Seeder
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
                'order_id' => '1',
                'item_id' => '1',
                'item_name' => "Burger",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '1',
                'item_id' => '2',
                'item_name' => "Hot Dog",
                'quantity' => '01',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '2',
                'item_id' => '1',
                'item_name' => "Burger",
                'quantity' => '04',
                'net_total' => '4.00',
                'is_paid' => '1'
            ],

            [
                'order_id' => '3',
                'item_id' => '1',
                'item_name' => 'Burger',
                'quantity' => '01',
                'net_total' => '1.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '3',
                'item_id' => '4',
                'item_name' => 'Fried Rice',
                'quantity' => '2',
                'net_total' => '10.00',
                'is_paid' => '0'
            ]

        ];

        foreach($data as $data)
        {
            Order_manipulations::forceCreate($data);
        }

    }
}
