<?php

use Illuminate\Database\Seeder;
use App\Model\Order_manipulations;

class Order_manipulationsTableSeeder extends Seeder
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
                'order_id' => '1',
                'item_id' => '12',
                'item_name' => "Chicken Samucha",
                'quantity' => '02',
                'net_total' => '4.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '1',
                'item_id' => '20',
                'item_name' => "Beaf Samucha",
                'quantity' => '01',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '2',
                'item_id' => '6',
                'item_name' => "Beaf Burger",
                'quantity' => '04',
                'net_total' => '8.00',
                'is_paid' => '1'
            ],

            [
                'order_id' => '3',
                'item_id' => '9',
                'item_name' => "Tuna Burger",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '3',
                'item_id' => '6',
                'item_name' => "Beaf Bugder",
                'quantity' => '01',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '4',
                'item_id' => '18',
                'item_name' => "Chicken Soup",
                'quantity' => '02',
                'net_total' => '4.00',
                'is_paid' => '1'
            ],
            [
                'order_id' => '5',
                'item_id' => '22',
                'item_name' => "Chicken Pot Pie",
                'quantity' => '02',
                'net_total' => '4.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '6',
                'item_id' => '27',
                'item_name' => "Chicken Pizz",
                'quantity' => '01',
                'net_total' => '1.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '7',
                'item_id' => '22',
                'item_name' => "Chicken Pot Pie",
                'quantity' => '04',
                'net_total' => '8.00',
                'is_paid' => '1'
            ],

            [
                'order_id' => '8',
                'item_id' => '9',
                'item_name' => "Tuna Burger",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '8',
                'item_id' => '6',
                'item_name' => "Beaf Bugder",
                'quantity' => '01',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '9',
                'item_id' => '18',
                'item_name' => "Chicken Soup",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '1'
            ],

            [
                'order_id' => '10',
                'item_id' => '112',
                'item_name' => "Beaf Fried Rice 2",
                'quantity' => '02',
                'net_total' => '10.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '10',
                'item_id' => '50',
                'item_name' => "Seed Beer",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '11',
                'item_id' => '61',
                'item_name' => "Fruit Custard",
                'quantity' => '04',
                'net_total' => '4.00',
                'is_paid' => '1'
            ],

            [
                'order_id' => '12',
                'item_id' => '45',
                'item_name' => "Grape Tea",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '13',
                'item_id' => '16',
                'item_name' => "Ham Sandwich",
                'quantity' => '01',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '14',
                'item_id' => '28',
                'item_name' => "Chicken Roasted Pizza",
                'quantity' => '02',
                'net_total' => '4.00',
                'is_paid' => '1'
            ],

            [
                'order_id' => '15',
                'item_id' => '112',
                'item_name' => "Beaf Fried Rice 2",
                'quantity' => '02',
                'net_total' => '10.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '15',
                'item_id' => '100',
                'item_name' => "Cream Cinnamon Cake 2",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '16',
                'item_id' => '41',
                'item_name' => "Gold Coffee",
                'quantity' => '04',
                'net_total' => '4.00',
                'is_paid' => '1'
            ],

            [
                'order_id' => '17',
                'item_id' => '51',
                'item_name' => "Root Beer",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '17',
                'item_id' => '116',
                'item_name' => "Chicken Veg Curry 2",
                'quantity' => '01',
                'net_total' => '5.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '18',
                'item_id' => '118',
                'item_name' => "Beaf Masala Curry 2",
                'quantity' => '02',
                'net_total' => '10.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '19',
                'item_id' => '12',
                'item_name' => "Chicken Samucha",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '19',
                'item_id' => '101',
                'item_name' => "Fruit Custard 2",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '20',
                'item_id' => '40',
                'item_name' => "Black Coffee",
                'quantity' => '04',
                'net_total' => '4.00',
                'is_paid' => '1'
            ],

            [
                'order_id' => '21',
                'item_id' => '71',
                'item_name' => "Egg Fried Rice",
                'quantity' => '02',
                'net_total' => '10.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '21',
                'item_id' => '47',
                'item_name' => "Tarqish Wine",
                'quantity' => '01',
                'net_total' => '1.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '22',
                'item_id' => '19',
                'item_name' => "Veg Sandwich",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '1'
            ],

            [
                'order_id' => '23',
                'item_id' => '62',
                'item_name' => "Heavy Cream Custard",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '23',
                'item_id' => '103',
                'item_name' => "Mixed Fruit Cake 2",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '24',
                'item_id' => '14',
                'item_name' => "Fish Samucha",
                'quantity' => '02',
                'net_total' => '4.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '25',
                'item_id' => '101',
                'item_name' => "Fruit Custard 2",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '25',
                'item_id' => '97',
                'item_name' => "Apple Pie 2",
                'quantity' => '01',
                'net_total' => '1.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '26',
                'item_id' => '29',
                'item_name' => "Olivia Pizza",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '27',
                'item_id' => '20',
                'item_name' => "Beaf Samucha",
                'quantity' => '02',
                'net_total' => '4.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '27',
                'item_id' => '23',
                'item_name' => "Cicken ROasted Dumstick",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '28',
                'item_id' => '40',
                'item_name' => "Black Coffee",
                'quantity' => '04',
                'net_total' => '4.00',
                'is_paid' => '1'
            ],

            [
                'order_id' => '29',
                'item_id' => '11',
                'item_name' => "Tuna Sandwich",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '29',
                'item_id' => '47',
                'item_name' => "Tarqish Wine",
                'quantity' => '01',
                'net_total' => '1.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '30',
                'item_id' => '92',
                'item_name' => "Mapple Sirup Beer 2",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '1'
            ],

            [
                'order_id' => '31',
                'item_id' => '21',
                'item_name' => "Chicken Wing Burger",
                'quantity' => '04',
                'net_total' => '4.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '31',
                'item_id' => '24',
                'item_name' => "Beaf Lasanga",
                'quantity' => '02',
                'net_total' => '4.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '32',
                'item_id' => '41',
                'item_name' => "Gold Coffee",
                'quantity' => '04',
                'net_total' => '4.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '33',
                'item_id' => '12',
                'item_name' => "Chicken Samucha",
                'quantity' => '02',
                'net_total' => '4.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '33',
                'item_id' => '48',
                'item_name' => "Strawberry Wine",
                'quantity' => '01',
                'net_total' => '1.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '34',
                'item_id' => '93',
                'item_name' => "Pudin Cake 2",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => ''
            ],

            [
                'order_id' => '35',
                'item_id' => '22',
                'item_name' => "Chicken Pot Pie",
                'quantity' => '04',
                'net_total' => '8.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '35',
                'item_id' => '25',
                'item_name' => "Pizza pie",
                'quantity' => '04',
                'net_total' => '4.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '36',
                'item_id' => '42',
                'item_name' => "Cream Coffee",
                'quantity' => '04',
                'net_total' => '4.00',
                'is_paid' => '1'
            ],

            [
                'order_id' => '37',
                'item_id' => '13',
                'item_name' => "Beaf Samucha",
                'quantity' => '04',
                'net_total' => '4.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '37',
                'item_id' => '49',
                'item_name' => "Beer Gold",
                'quantity' => '01',
                'net_total' => '1.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '38',
                'item_id' => '94',
                'item_name' => "Muffin Cake 2",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '1'
            ],

            [
                'order_id' => '39',
                'item_id' => '23',
                'item_name' => "Cicken ROasted Dumstick",
                'quantity' => '08',
                'net_total' => '8.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '39',
                'item_id' => '26',
                'item_name' => "Beaf Pizza",
                'quantity' => '02',
                'net_total' => '4.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '40',
                'item_id' => '43',
                'item_name' => "Red Wine",
                'quantity' => '04',
                'net_total' => '4.00',
                'is_paid' => '1'
            ],

            [
                'order_id' => '41',
                'item_id' => '14',
                'item_name' => "Fish Samucha",
                'quantity' => '04',
                'net_total' => '8.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '41',
                'item_id' => '50',
                'item_name' => "Seed Beer",
                'quantity' => '04',
                'net_total' => '4.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '42',
                'item_id' => '95',
                'item_name' => "Puff Cake 2",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '43',
                'item_id' => '53',
                'item_name' => "Pudin Cake",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '43',
                'item_id' => '54',
                'item_name' => "Muffin Cake",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '44',
                'item_id' => '55',
                'item_name' => "Puff Cake",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '45',
                'item_id' => '56',
                'item_name' => "Cream Cake",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '46',
                'item_id' => '57',
                'item_name' => "Apple Pie",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '47',
                'item_id' => '58',
                'item_name' => "Cream Pie",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '47',
                'item_id' => '59',
                'item_name' => "Chocolate Strawberry Pie",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '48',
                'item_id' => '60',
                'item_name' => "Cream Cinnamon Cake",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '49',
                'item_id' => '61',
                'item_name' => "Fruit Custard",
                'quantity' => '02',
                'net_total' => '2.00',
                'is_paid' => '0'
            ],

            [
                'order_id' => '50',
                'item_id' => '62',
                'item_name' => 'Heavy Cream Custard',
                'quantity' => '2',
                'net_total' => '2.00',
                'is_paid' => '0'
            ]

        ];

        foreach($data as $data)
        {
            Order_manipulations::forceCreate($data);
        }

    }
}
