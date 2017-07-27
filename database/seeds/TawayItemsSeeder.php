<?php

use App\Model\TawayItems;
use Illuminate\Database\Seeder;

class TawayItemsSeeder extends Seeder
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
                'name' => "Fresh Orange Juice",
                'category' => "Drinks & Desert",
                'base_price' => '3.00'
            ],

            [
                'name' => "Fresh Carrot Juice",
                'category' => "Drinks & Desert",
                'base_price' => '3.00'
            ],

            [
                'name' => "Fresh Apple Juice",
                'category' => "Drinks & Desert",
                'base_price' => '3.00'
            ],

            [
                'name' => "Fresh Lemonade",
                'category' => "Drinks & Desert",
                'base_price' => '3.00'
            ],

            [
                'name' => "Mix Fresh Juice",
                'category' => "Drinks & Desert",
                'base_price' => '3.00'
            ],

            [
                'name' => "English Tea",
                'category' => "Drinks & Desert",
                'base_price' => '1.50'
            ],
            [
                'name' => "Chamomile Tea",
                'category' => "Drinks & Desert",
                'base_price' => '1.50'
            ],

            [
                'name' => "Jeanine Tea",
                'category' => "Drinks & Desert",
                'base_price' => '1.50'
            ],

            [
                'name' => "Pippermint Tea",
                'category' => "Drinks & Desert",
                'base_price' => '1.50'
            ],

            [
                'name' => "Green Tea",
                'category' => "Drinks & Desert",
                'base_price' => '1.50'
            ],

            [
                'name' => "Coffie Latte",
                'category' => "Drinks & Desert",
                'base_price' => '2.00'
            ],

            [
                'name' => "Cappuccino",
                'category' => "Drinks & Desert",
                'base_price' => '2.00'
            ],

            [
                'name' => "American Coffie",
                'category' => "Drinks & Desert",
                'base_price' => '2.00'
            ],

            [
                'name' => "Espresso Coffie",
                'category' => "Drinks & Desert",
                'base_price' => '2.00'
            ],

            [
                'name' => "Hot Chocolate",
                'category' => "Drinks & Desert",
                'base_price' => '2.00'
            ],

            [
                'name' => "Banana Shake",
                'category' => "Drinks & Desert",
                'base_price' => '2.50'
            ],

            [
                'name' => "bla bla",
                'category' => "main_meal",
                'base_price' => '1.00'
            ]

        ];
        
        foreach($data as $data)
        {
            TawayItems::forceCreate($data);
        }

    }
}
