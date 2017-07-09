<?php

use Illuminate\Database\Seeder;
use App\Model\OnlineOrders;

class OnlineOrdersTableSeeder extends Seeder
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
                'user_id' => '1',
                'customer_id' => '1',
                'category_id' => '1',
                'total_item' => '2',
                'is_paid' => '0'
            ],

            [
                'user_id' => '1',
                'customer_id' => '2',
                'category_id' => '2',
                'total_item' => '1',
                'is_paid'=>'1'
            ]
        ];

        foreach($data as $data)
        {
            OnlineOrders::forceCreate($data);
        }
    }
}
