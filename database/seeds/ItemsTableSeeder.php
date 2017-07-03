<?php

use Illuminate\Database\Seeder;
use App\Model\Items;

class ItemsTableSeeder extends Seeder
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
                'name' => "Burger",
                'stock' => '100',
                'code' => "f-01",
                'base_price' => '1.00'
            ],

            [
                'name' => "Hot Dog",
                'stock' => '75',
                'code' => "f-02",
                'base_price' => '2.00'
            ],

            [
                'name' => "Sandwich",
                'stock' => '100',
                'code' => "f-03",
                'base_price' => '1.00'
            ],

            [
                'name' => "Samucha",
                'stock' => '75',
                'code' => "f-04",
                'base_price' => '2.00'
            ],

            [
                'name' => "Chicken Burger",
                'stock' => '100',
                'code' => "f-05",
                'base_price' => '1.00'
            ],

            [
                'name' => "Beaf Burger",
                'stock' => '75',
                'code' => "f-06",
                'base_price' => '2.00'
            ],

            [
                'name' => "Cicken Sandwich",
                'stock' => '100',
                'code' => "f-07",
                'base_price' => '1.00'
            ],

            [
                'name' => "Beaf Sandwich",
                'stock' => '75',
                'code' => "f-08",
                'base_price' => '2.00'
            ],

            [
                'name' => "Tuna Burger",
                'stock' => '100',
                'code' => "f-09",
                'base_price' => '1.00'
            ],

            [
                'name' => "Salmon Burger",
                'stock' => '75',
                'code' => "f-010",
                'base_price' => '2.00'
            ],

            [
                'name' => "Tuna Sandwich",
                'stock' => '100',
                'code' => "f-11",
                'base_price' => '1.00'
            ],

            [
                'name' => "Chicken Samucha",
                'stock' => '75',
                'code' => "f-012",
                'base_price' => '2.00'
            ],

            [
                'name' => "Beaf Samucha",
                'stock' => '100',
                'code' => "f-13",
                'base_price' => '1.00'
            ],

            [
                'name' => "Fish Samucha",
                'stock' => '75',
                'code' => "f-14",
                'base_price' => '2.00'
            ],

            [
                'name' => "Ham Burger",
                'stock' => '100',
                'code' => "f-15",
                'base_price' => '1.00'
            ],

            [
                'name' => "Ham Sandwich",
                'stock' => '75',
                'code' => "f-16",
                'base_price' => '2.00'
            ],

            [
                'name' => "Chicken Wings",
                'stock' => '100',
                'code' => "f-17",
                'base_price' => '1.00'
            ],

            [
                'name' => "Chicken Soup",
                'stock' => '75',
                'code' => "f-18",
                'base_price' => '2.00'
            ],

            [
                'name' => "Veg Sandwich",
                'stock' => '100',
                'code' => "f-19",
                'base_price' => '1.00'
            ],

            [
                'name' => "Beaf Samucha",
                'stock' => '75',
                'code' => "f-20",
                'base_price' => '2.00'
            ],

            [
                'name' => "Chicken Wing Burger",
                'stock' => '100',
                'code' => "f-21",
                'base_price' => '1.00'
            ],

            [
                'name' => "Chicken Pot Pie",
                'stock' => '75',
                'code' => "f-22",
                'base_price' => '2.00'
            ],

            [
                'name' => "Cicken ROasted Dumstick",
                'stock' => '100',
                'code' => "f-23",
                'base_price' => '1.00'
            ],

            [
                'name' => "Beaf Lasanga",
                'stock' => '75',
                'code' => "f-24",
                'base_price' => '2.00'
            ],

            [
                'name' => "Pizza pie",
                'stock' => '100',
                'code' => "f-25",
                'base_price' => '1.00'
            ],

            [
                'name' => "Beaf Pizza",
                'stock' => '75',
                'code' => "f-26",
                'base_price' => '2.00'
            ],

            [
                'name' => "Chicken Pizza",
                'stock' => '100',
                'code' => "f-27",
                'base_price' => '1.00'
            ],

            [
                'name' => "Chicken Roasted Pizza",
                'stock' => '75',
                'code' => "f-28",
                'base_price' => '2.00'
            ],

            [
                'name' => "Olivia Pizza",
                'stock' => '100',
                'code' => "f-29",
                'base_price' => '1.00'
            ],

            [
                'name' => "Chicken Nugget",
                'stock' => '75',
                'code' => "f-30",
                'base_price' => '2.00'
            ],

            [
                'name' => "Club Sandwich",
                'stock' => '100',
                'code' => "f-31",
                'base_price' => '1.00'
            ],

            [
                'name' => "King Sandwich",
                'stock' => '75',
                'code' => "f-32",
                'base_price' => '2.00'
            ],

            [
                'name' => "Cold Coffee",
                'stock' => '200',
                'code' => "c-01",
                'base_price' => '00.50'
            ],

            [
                'name' => "Black Tea",
                'stock' => '200',
                'code' => "c-02",
                'base_price' => '00.50'
            ],

            [
                'name' => "Green Tea",
                'stock' => '200',
                'code' => "c-03",
                'base_price' => '00.50'
            ],

            [
                'name' => "Gold Tea",
                'stock' => '200',
                'code' => "c-04",
                'base_price' => '00.50'
            ],

            [
                'name' => "Hot Coffee",
                'stock' => '200',
                'code' => "c-05",
                'base_price' => '00.50'
            ],

            [
                'name' => "Chocolate Coffee",
                'stock' => '200',
                'code' => "c-06",
                'base_price' => '00.50'
            ],

            [
                'name' => "Coco Grind Coffee",
                'stock' => '200',
                'code' => "c-07",
                'base_price' => '00.50'
            ],

            [
                'name' => "Black Coffee",
                'stock' => '200',
                'code' => "c-08",
                'base_price' => '00.50'
            ],

            [
                'name' => "Gold Coffee",
                'stock' => '200',
                'code' => "c-09",
                'base_price' => '00.50'
            ],

            [
                'name' => "Cream Coffee",
                'stock' => '200',
                'code' => "c-10",
                'base_price' => '00.50'
            ],

            [
                'name' => "Red Wine",
                'stock' => '200',
                'code' => "w-01",
                'base_price' => '00.50'
            ],

            [
                'name' => "Wine Gold",
                'stock' => '200',
                'code' => "w-02",
                'base_price' => '00.50'
            ],

            [
                'name' => "Grape Tea",
                'stock' => '200',
                'code' => "w-03",
                'base_price' => '00.50'
            ],

            [
                'name' => "Apple Cider Wine",
                'stock' => '200',
                'code' => "w-04",
                'base_price' => '00.50'
            ],

            [
                'name' => "Tarqish Wine",
                'stock' => '200',
                'code' => "w-05",
                'base_price' => '00.50'
            ],

            [
                'name' => "Strawberry Wine",
                'stock' => '200',
                'code' => "w-06",
                'base_price' => '00.50'
            ],

            [
                'name' => "Beer Gold",
                'stock' => '200',
                'code' => "b-01",
                'base_price' => '00.50'
            ],

            [
                'name' => "Seed Beer",
                'stock' => '200',
                'code' => "b-02",
                'base_price' => '00.50'
            ],

            [
                'name' => "Root Beer",
                'stock' => '200',
                'code' => "b-03",
                'base_price' => '00.50'
            ],

            [
                'name' => "Mapple Sirup Beer",
                'stock' => '200',
                'code' => "b-04",
                'base_price' => '00.50'
            ],

            [
                'name' => "Pudin Cake",
                'stock' => '200',
                'code' => "de-01",
                'base_price' => '00.50'
            ],

            [
                'name' => "Muffin Cake",
                'stock' => '200',
                'code' => "de-02",
                'base_price' => '00.50'
            ],

            [
                'name' => "Puff Cake",
                'stock' => '200',
                'code' => "de-03",
                'base_price' => '00.50'
            ],

            [
                'name' => "Cream Cake",
                'stock' => '200',
                'code' => "de-04",
                'base_price' => '00.50'
            ],

            [
                'name' => "Apple Pie",
                'stock' => '200',
                'code' => "de-05",
                'base_price' => '00.50'
            ],

            [
                'name' => "Cream Pie",
                'stock' => '200',
                'code' => "de-06",
                'base_price' => '00.50'
            ],

            [
                'name' => "Chocolate Strawberry Pie",
                'stock' => '200',
                'code' => "de-07",
                'base_price' => '00.50'
            ],

            [
                'name' => "Cream Cinnamon Cake",
                'stock' => '200',
                'code' => "de-08",
                'base_price' => '00.50'
            ],

            [
                'name' => "Fruit Custard",
                'stock' => '200',
                'code' => "de-09",
                'base_price' => '00.50'
            ],

            [
                'name' => "Heavy Cream Custard",
                'stock' => '200',
                'code' => "de-10",
                'base_price' => '00.50'
            ],

            [
                'name' => "Mixed Fruit Cake",
                'stock' => '200',
                'code' => "de-11",
                'base_price' => '00.50'
            ],

            [
                'name' => "Oreo Cream Cake",
                'stock' => '200',
                'code' => "de-12",
                'base_price' => '00.50'
            ],

            [
                'name' => "Plain Fried Rice",
                'stock' => '200',
                'code' => "m-01",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Fried Rice",
                'stock' => '200',
                'code' => "m-02",
                'base_price' => '5.00'
            ],

            [
                'name' => "Veg Fried Rice",
                'stock' => '200',
                'code' => "m-03",
                'base_price' => '5.00'
            ],

            [
                'name' => "Onion Fried Rice",
                'stock' => '200',
                'code' => "m-04",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Fried Rice",
                'stock' => '200',
                'code' => "m-05",
                'base_price' => '5.00'
            ],

            [
                'name' => "Perri Perri Chicken Fried Rice",
                'stock' => '200',
                'code' => "m-06",
                'base_price' => '5.00'
            ],

            [
                'name' => "Egg Fried Rice",
                'stock' => '200',
                'code' => "m-07",
                'base_price' => '5.00'
            ],

            [
                'name' => "Beaf Fried Rice",
                'stock' => '200',
                'code' => "m-08",
                'base_price' => '5.00'
            ],

            [
                'name' => "Plain Rice",
                'stock' => '200',
                'code' => "m-09",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Masala Curry",
                'stock' => '200',
                'code' => "cu-01",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Sauces Dums",
                'stock' => '200',
                'code' => "cu-02",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Veg Curry",
                'stock' => '200',
                'code' => "cu-03",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Sauces Wings",
                'stock' => '200',
                'code' => "cu-04",
                'base_price' => '5.00'
            ],

            [
                'name' => "Beaf Masala Curry",
                'stock' => '200',
                'code' => "cu-05",
                'base_price' => '5.00'
            ],

            [
                'name' => "Beaf Masala Onion Fry",
                'stock' => '200',
                'code' => "cu-06",
                'base_price' => '5.00'
            ],

            [
                'name' => "Beaf Veg Curry",
                'stock' => '200',
                'code' => "cu-07",
                'base_price' => '5.00'
            ],

            [
                'name' => "Tanduri Chicken",
                'stock' => '200',
                'code' => "cu-08",
                'base_price' => '5.00'
            ],

            [
                'name' => "Tanduri Beaf",
                'stock' => '200',
                'code' => "cu-09",
                'base_price' => '5.00'
            ],

            [
                'name' => "Red Wine 2",
                'stock' => '200',
                'code' => "w-11",
                'base_price' => '00.50'
            ],

            [
                'name' => "Wine Gold 2",
                'stock' => '200',
                'code' => "w-12",
                'base_price' => '00.50'
            ],

            [
                'name' => "Grape Tea 2",
                'stock' => '200',
                'code' => "w-13",
                'base_price' => '00.50'
            ],

            [
                'name' => "Apple Cider Wine 2",
                'stock' => '200',
                'code' => "w-14",
                'base_price' => '00.50'
            ],

            [
                'name' => "Tarqish Wine 2",
                'stock' => '200',
                'code' => "w-15",
                'base_price' => '00.50'
            ],

            [
                'name' => "Strawberry Wine 2",
                'stock' => '200',
                'code' => "w-16",
                'base_price' => '00.50'
            ],

            [
                'name' => "Beer Gold 2",
                'stock' => '200',
                'code' => "b-11",
                'base_price' => '00.50'
            ],

            [
                'name' => "Seed Beer 2",
                'stock' => '200',
                'code' => "b-12",
                'base_price' => '00.50'
            ],

            [
                'name' => "Root Beer 2",
                'stock' => '200',
                'code' => "b-13",
                'base_price' => '00.50'
            ],

            [
                'name' => "Mapple Sirup Beer 2",
                'stock' => '200',
                'code' => "b-14",
                'base_price' => '00.50'
            ],

            [
                'name' => "Pudin Cake 2",
                'stock' => '200',
                'code' => "de-11",
                'base_price' => '00.50'
            ],

            [
                'name' => "Muffin Cake 2",
                'stock' => '200',
                'code' => "de-12",
                'base_price' => '00.50'
            ],

            [
                'name' => "Puff Cake 2",
                'stock' => '200',
                'code' => "de-13",
                'base_price' => '00.50'
            ],

            [
                'name' => "Cream Cake 2",
                'stock' => '200',
                'code' => "de-14",
                'base_price' => '00.50'
            ],

            [
                'name' => "Apple Pie 2",
                'stock' => '200',
                'code' => "de-15",
                'base_price' => '00.50'
            ],

            [
                'name' => "Cream Pie 2",
                'stock' => '200',
                'code' => "de-16",
                'base_price' => '00.50'
            ],

            [
                'name' => "Chocolate Strawberry Pie 2",
                'stock' => '200',
                'code' => "de-17",
                'base_price' => '00.50'
            ],

            [
                'name' => "Cream Cinnamon Cake 2",
                'stock' => '200',
                'code' => "de-18",
                'base_price' => '00.50'
            ],

            [
                'name' => "Fruit Custard 2",
                'stock' => '200',
                'code' => "de-19",
                'base_price' => '00.50'
            ],

            [
                'name' => "Heavy Cream Custard 2",
                'stock' => '200',
                'code' => "de-20",
                'base_price' => '00.50'
            ],

            [
                'name' => "Mixed Fruit Cake 2",
                'stock' => '200',
                'code' => "de-21",
                'base_price' => '00.50'
            ],

            [
                'name' => "Oreo Cream Cake 2",
                'stock' => '200',
                'code' => "de-22",
                'base_price' => '00.50'
            ],

            [
                'name' => "Plain Fried Rice 2",
                'stock' => '200',
                'code' => "m-11",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Fried Rice 2",
                'stock' => '200',
                'code' => "m-12",
                'base_price' => '5.00'
            ],

            [
                'name' => "Veg Fried Rice 2",
                'stock' => '200',
                'code' => "m-13",
                'base_price' => '5.00'
            ],

            [
                'name' => "Onion Fried Rice 2",
                'stock' => '200',
                'code' => "m-14",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Fried Rice 2",
                'stock' => '200',
                'code' => "m-15",
                'base_price' => '5.00'
            ],

            [
                'name' => "Perri Perri Chicken Fried Rice 2",
                'stock' => '200',
                'code' => "m-16",
                'base_price' => '5.00'
            ],

            [
                'name' => "Egg Fried Rice 2",
                'stock' => '200',
                'code' => "m-17",
                'base_price' => '5.00'
            ],

            [
                'name' => "Beaf Fried Rice 2",
                'stock' => '200',
                'code' => "m-18",
                'base_price' => '5.00'
            ],

            [
                'name' => "Plain Rice 2",
                'stock' => '200',
                'code' => "m-19",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Masala Curry 2",
                'stock' => '200',
                'code' => "cu-11",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Sauces Wings Extra 2",
                'stock' => '200',
                'code' => "cu-12",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Veg Curry 2",
                'stock' => '200',
                'code' => "cu-13",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Sauces Wings 2",
                'stock' => '200',
                'code' => "cu-14",
                'base_price' => '5.00'
            ],

            [
                'name' => "Beaf Masala Curry 2",
                'stock' => '200',
                'code' => "cu-15",
                'base_price' => '5.00'
            ],

            [
                'name' => "Beaf Masala Onion Fry 2",
                'stock' => '200',
                'code' => "cu-16",
                'base_price' => '5.00'
            ],

            [
                'name' => "Beaf Veg Curry 2",
                'stock' => '200',
                'code' => "cu-17",
                'base_price' => '5.00'
            ],

            [
                'name' => "Tanduri Chicken 2",
                'stock' => '200',
                'code' => "cu-18",
                'base_price' => '5.00'
            ],

            [
                'name' => "Tanduri Beaf 2",
                'stock' => '200',
                'code' => "cu-19",
                'base_price' => '5.00'
            ],

            [
                'name' => "Chicken Curry",
                'stock' => '200',
                'code' => "cu-20",
                'base_price' => '5.00'
            ],

            [
                'name' => "Extra Pizza Chease",
                'stock' => '200',
                'code' => "ai-01",
                'base_price' => '0.10'
            ],

            [
                'name' => "Extra Pizza Mozerella",
                'stock' => '200',
                'code' => "ai-02",
                'base_price' => '0.30'
            ],

            [
                'name' => "Extra Burger Chease",
                'stock' => '200',
                'code' => "ai-03",
                'base_price' => '0.40'
            ],

            [
                'name' => "Extra Ham For Nurger",
                'stock' => '200',
                'code' => "ai-04",
                'base_price' => '1.00'
            ],

            [
                'name' => "Extra Beaf",
                'stock' => '200',
                'code' => "ai-05",
                'base_price' => '5.00'
            ],

            [
                'name' => "Extra Olive For Pizza",
                'stock' => '200',
                'code' => "ai-06",
                'base_price' => '0.50'
            ],

            [
                'name' => "Extra Ham for Sandwich",
                'stock' => '200',
                'code' => "ai-07",
                'base_price' => '1.50'
            ],

            [
                'name' => "Extra Garlic Sauce",
                'stock' => '200',
                'code' => "ai-08",
                'base_price' => '0.30'
            ],

            [
                'name' => "Extra Salad",
                'stock' => '200',
                'code' => "ai-09",
                'base_price' => '1.00'
            ],

            [
                'name' => "Extra Fried Onion",
                'stock' => '200',
                'code' => "ai-10",
                'base_price' => '0.80'
            ]
        ];

        foreach($data as $data)
        {
            Items::forceCreate($data);
        }

    }
}
