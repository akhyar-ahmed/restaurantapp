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
                'grand_total' => '4.00'
            ]
        ];

        foreach($data as $data)
        {
            Incomes::forceCreate($data);
        }

    }
}
