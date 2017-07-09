<?php

use Illuminate\Database\Seeder;
use App\Model\Orders;

class OrdersTableSeeder extends Seeder
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
                'table_id' => "C-01",
                'total_item' => '2',
                'is_paid' => '0'
            ],

            [
                'user_id' => '1',
                'table_id' => "C-10",
                'total_item' => '1',
                'is_paid' => '1'
            ],

            [
                'user_id' => '2',
                'table_id' => "C-01",
                'total_item' => '2',
                'is_paid' => '0'
            ],

            [
                'user_id' => '1',
                'table_id' => "C-12",
                'total_item' => '1',
                'is_paid' => '1'
            ],

            [
                'user_id' => '2',
                'table_id' => "C-17",
                'total_item' => '1',
                'is_paid' => '0'
            ],

            [
                'user_id' => '1',
                'table_id' => "C-12",
                'total_item' => '1',
                'is_paid' => '0'
            ],

            [
                'user_id' => '2',
                'table_id' => "C-37",
                'total_item' => '1',
                'is_paid' => '1'
            ]

        ];

        foreach($data as $data)
        {
            Orders::forceCreate($data);
        }

    }
}
