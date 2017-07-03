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
            ],

            [
                'order_id' => '9',
                'grand_total' => '2.00'
            ],

            [
                'order_id' => '11',
                'grand_total' => '4.00'
            ],

            [
                'order_id' => '14',
                'grand_total' => '4.00'
            ],

            [
                'order_id' => '16',
                'grand_total' => '4.00'
            ],

            [
                'order_id' => '20',
                'grand_total' => '4.00'
            ],

            [
                'order_id' => '22',
                'grand_total' => '2.00'
            ],

            [
                'order_id' => '28',
                'grand_total' => '4.00'
            ],

            [
                'order_id' => '30',
                'grand_total' => '2.00'
            ],

            [
                'order_id' => '36',
                'grand_total' => '4.00'
            ],

            [
                'order_id' => '38',
                'grand_total' => '2.00'
            ],

            [
                'order_id' => '40',
                'grand_total' => '4.00'
            ],

            [
                'order_id' => '42',
                'grand_total' => '2.00'
            ],

            [
                'order_id' => '44',
                'grand_total' => '2.00'
            ],
        ];

        foreach($data as $data)
        {
            Incomes::forceCreate($data);
        }

    }
}
