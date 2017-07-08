<?php

use Illuminate\Database\Seeder;
use App\Model\OnlineOrderManipulations;

class OnlineOrderManipulationsTableSeeder extends Seeder
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
                'online_order_id' => '1',
                'item_id' => '12',
                'item_name' => "Chicken Samucha",
                'quantity' => '02',
                'net_total' => '4.00',
                'is_paid' => '0'
            ],

            [
                'online_order_id' => '1',
                'item_id' => '20',
                'item_name' => "Beaf Samucha",
                'quantity' => '01',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'online_order_id' => '2',
                'item_id' => '6',
                'item_name' => "Beaf Burger",
                'quantity' => '04',
                'net_total' => '8.00',
                'is_paid' => '1'
            ]
        ];

        foreach($data as $data)
        {
           OnlineOrderManipulations::forceCreate($data);
        }
    }
}
