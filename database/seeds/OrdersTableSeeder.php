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
                'category_id' => '1'
            ],

            [
                'user_id' => '1',
                'table_id' => "C-10",
                'category_id' => '1'
            ],

            [
                'user_id' => '2',
                'table_id' => "C-01",
                'category_id' => '1'
            ],

            [
                'user_id' => '1',
                'table_id' => "C-12",
                'category_id' => '1'
            ],

            [
                'user_id' => '2',
                'table_id' => "C-17",
                'category_id' => '1'
            ],

            [
                'user_id' => '1',
                'table_id' => "C-12",
                'category_id' => '1'
            ],

            [
                'user_id' => '2',
                'table_id' => "C-37",
                'category_id' => '1'
            ]

        ];

        foreach($data as $data)
        {
            Orders::forceCreate($data);
        }

    }
}
