<?php

use Illuminate\Database\Seeder;
use App\Model\OnlineIncomes;

class OnlineIncomesTableSeeder extends Seeder
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
                'online_order_id' => '2',
                'grand_total' => '8.00'
            ]
        ];

        foreach($data as $data)
        {
            OnlineIncomes::forceCreate($data);
        }
        
    }
}
