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
                'table_id' => "C-01"
            ],

            [
                'user_id' => '2',
                'table_id' => "C-02"
            ],

            [
                'user_id' => '1',
                'table_id' => 'C-02'
            ]
        ];

        foreach($data as $data)
        {
            Orders::forceCreate($data);
        }

    }
}
