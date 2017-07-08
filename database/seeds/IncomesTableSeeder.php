<?php

use Illuminate\Database\Seeder;
use App\Model\Incomes;

class IncomesTableSeeder extends Seeder
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
                'order_id' => '2',
                'grand_total' => '8.00'
            ],

            [
                'order_id' => '4',
                'grand_total' => '4.00'
            ],

            [
                'order_id' => '7',
                'grand_total' => '8.00'
            ]
        ];

        foreach($data as $data)
        {
            Incomes::forceCreate($data);
        }

    }
}
