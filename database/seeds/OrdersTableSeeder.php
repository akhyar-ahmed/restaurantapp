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
                'user_id' => '2',
                'table_id' => "",
                'category_id' => '2'
            ],

            [
                'user_id' => '3',
                'table_id' => "",
                'category_id' => '3'
            ],

            [
                'user_id' => '4',
                'table_id' => "",
                'category_id' => '2'
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
                'user_id' => '3',
                'table_id' => "",
                'category_id' => '3'
            ],

            [
                'user_id' => '4',
                'table_id' => "",
                'category_id' => '2'
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
                'user_id' => '3',
                'table_id' => "",
                'category_id' => '3'
            ],

            [
                'user_id' => '4',
                'table_id' => "",
                'category_id' => '2'
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
            ],

            [
                'user_id' => '3',
                'table_id' => "",
                'category_id' => '3'
            ],

            [
                'user_id' => '4',
                'table_id' => "",
                'category_id' => '2'
            ],

            [
                'user_id' => '1',
                'table_id' => "C-03",
                'category_id' => '1'
            ],

            [
                'user_id' => '2',
                'table_id' => "C-08",
                'category_id' => '1'
            ],

            [
                'user_id' => '3',
                'table_id' => "",
                'category_id' => '3'
            ],

            [
                'user_id' => '4',
                'table_id' => "",
                'category_id' => '3'
            ],

            [
                'user_id' => '1',
                'table_id' => "C-03",
                'category_id' => '1'
            ],

            [
                'user_id' => '2',
                'table_id' => "C-37",
                'category_id' => '1'
            ],

            [
                'user_id' => '3',
                'table_id' => "",
                'category_id' => '2'
            ],

            [
                'user_id' => '4',
                'table_id' => "",
                'category_id' => '3'
            ],

            [
                'user_id' => '1',
                'table_id' => "",
                'category_id' => '2'
            ],

            [
                'user_id' => '2',
                'table_id' => "C-17",
                'category_id' => '1'
            ],

            [
                'user_id' => '3',
                'table_id' => "",
                'category_id' => '2'
            ],

            [
                'user_id' => '4',
                'table_id' => "",
                'category_id' => '3'
            ],

            [
                'user_id' => '1',
                'table_id' => "C-11",
                'category_id' => '1'
            ],

            [
                'user_id' => '2',
                'table_id' => "",
                'category_id' => '3'
            ],

            [
                'user_id' => '3',
                'table_id' => "",
                'category_id' => '2'
            ],

            [
                'user_id' => '4',
                'table_id' => "",
                'category_id' => '3'
            ],

            [
                'user_id' => '1',
                'table_id' => "C-01",
                'category_id' => '1'
            ],

            [
                'user_id' => '2',
                'table_id' => "C-11",
                'category_id' => '1'
            ],

            [
                'user_id' => '3',
                'table_id' => "",
                'category_id' => '2'
            ],

            [
                'user_id' => '4',
                'table_id' => "",
                'category_id' => '3'
            ],

            [
                'user_id' => '1',
                'table_id' => "C-19",
                'category_id' => '1'
            ],

            [
                'user_id' => '2',
                'table_id' => "C-01",
                'category_id' => '1'
            ],

            [
                'user_id' => '3',
                'table_id' => "",
                'category_id' => '2'
            ],

            [
                'user_id' => '4',
                'table_id' => "",
                'category_id' => '3'
            ],

            [
                'user_id' => '5',
                'table_id' => '',
                'category_id' => '3'
            ],

            [
                'user_id' => '1',
                'table_id' => "C-10",
                'category_id' => '1'
            ],

            [
                'user_id' => '2',
                'table_id' => "C-17",
                'category_id' => '1'
            ],

            [
                'user_id' => '3',
                'table_id' => "",
                'category_id' => '2'
            ],

            [
                'user_id' => '4',
                'table_id' => "",
                'category_id' => '3'
            ],

            [
                'user_id' => '5',
                'table_id' => '',
                'category_id' => '3'
            ],

            [
                'user_id' => '3',
                'table_id' => "",
                'category_id' => '2'
            ],

            [
                'user_id' => '4',
                'table_id' => "",
                'category_id' => '3'
            ],

            [
                'user_id' => '4',
                'table_id' => "",
                'category_id' => '2'
            ],

            [
                'user_id' => '5',
                'table_id' => '',
                'category_id' => '3'
            ]
        ];

        foreach($data as $data)
        {
            Orders::forceCreate($data);
        }

    }
}
