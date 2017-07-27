<?php


use App\Model\HomedItems;
use Illuminate\Database\Seeder;

class HomedItemsSeeder extends Seeder
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
                'name' => "bla bla",
                'category' => "grill",
                'base_price' => '1.00'
            ],

            [
                'name' => "bla bla",
                'category' => "main_meal",
                'base_price' => '1.00'
            ]

        ];
        
        foreach($data as $data)
        {
            HomedItems::forceCreate($data);
        }

        
    }
}
