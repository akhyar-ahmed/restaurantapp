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
                'category_id' => '1'
            ],

            [
                'user_id' => '1',
                'customer_id' => '2',
                'category_id' => '2'
            ]
        ];

        foreach($data as $data)
        {
            OnlineOrders::forceCreate($data);
        }
    }
}
