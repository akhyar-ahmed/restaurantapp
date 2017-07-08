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
                'item_id' => '12',
                'item_name' => "Chicken Samucha",
                'quantity' => '02',
                'net_total' => '4.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '1',
                'item_id' => '20',
                'item_name' => "Beaf Samucha",
                'quantity' => '01',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '2',
                'item_id' => '6',
                'item_name' => "Beaf Burger",
                'quantity' => '04',
                'net_total' => '8.00',
                'is_paid' => '1'
            ],

            [
                'order_id' => '3',
                'item_id' => '9',
                'item_name' => "Tuna Burger",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '3',
                'item_id' => '6',
                'item_name' => "Beaf Bugder",
                'quantity' => '01',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '4',
                'item_id' => '18',
                'item_name' => "Chicken Soup",
                'quantity' => '02',
                'net_total' => '4.00',
                'is_paid' => '1'
            ],
            [
                'order_id' => '5',
                'item_id' => '22',
                'item_name' => "Chicken Pot Pie",
                'quantity' => '02',
                'net_total' => '4.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '6',
                'item_id' => '27',
                'item_name' => "Chicken Pizz",
                'quantity' => '01',
                'net_total' => '1.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '7',
                'item_id' => '22',
                'item_name' => "Chicken Pot Pie",
                'quantity' => '04',
                'net_total' => '8.00',
                'is_paid' => '1'
            ]

        ];

        foreach($data as $data)
        {
            Order_manipulations::forceCreate($data);
        }

    }
}
