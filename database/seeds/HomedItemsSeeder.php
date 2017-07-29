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
                'name' => "Chicken Shawarma Wrap",
                'category' => "Wrap",
                'base_price' => '4.99'
            ],

            [
                'name' => "Lamb Shawarma Wrap",
                'category' => "Wrap",
                'base_price' => '5.99'
            ],

            [
                'name' => "Chicken Shish Kebab Wrap",
                'category' => "Wrap",
                'base_price' => '5.99'
            ],

            [
                'name' => "Kofta Wrap",
                'category' => "Wrap",
                'base_price' => '5.50'
            ],

            [
                'name' => "Lamb Shish Kebab Wrap",
                'category' => "Wrap",
                'base_price' => '6.50'
            ],

            [
                'name' => "Additional",
                'category' => "Wrap",
                'base_price' => '2.00'
            ],

            [
                'name' => "Beef Burger Regular",
                'category' => "Burgers",
                'base_price' => '6.50'
            ],

            [
                'name' => "Beef Burger Large",
                'category' => "Burgers",
                'base_price' => '7.99'
            ],

            [
                'name' => "Chicken Fillet Burger Regular",
                'category' => "Burgers",
                'base_price' => '4.50'
            ],

            [
                'name' => "Chicken Fillet Burger Large",
                'category' => "Burgers",
                'base_price' => '5.99'
            ],

            

            [
                'name' => "Chicken Zinger Burger",
                'category' => "Burgers",
                'base_price' => '6.00'
            ],

            [
                'name' => "Fish Burger",
                'category' => "Burgers",
                'base_price' => '4.50'
            ],

            [
                'name' => "Veg Burger",
                'category' => "Burgers",
                'base_price' => '4.50'
            ],

            [
                'name' => "Additional",
                'category' => "Burgers",
                'base_price' => '2.00'
            ],

            [
                'name' => "Chicken Curry",
                'category' => "Curry",
                'base_price' => '6.99'
            ],
            
            [
                'name' => "Lamb Curry",
                'category' => "Curry",
                'base_price' => '6.99'
            ],

            [
                'name' => "Biryani",
                'category' => "Curry",
                'base_price' => '6.99'
            ],
            
            [
                'name' => "Okra Curry",
                'category' => "Curry",
                'base_price' => '6.99'
            ],

            [
                'name' => " Beans Curry",
                'category' => "Curry",
                'base_price' => '6.99'
            ],
            
            [
                'name' => "Chicken Shish Kebab Regular",
                'category' => "Grilled",
                'base_price' => '6.50'
            ],

            [
                'name' => "Chicken Shish Kebab large",
                'category' => "Grilled",
                'base_price' => '8.50'
            ],

            [
                'name' => "Lamb Shish Kebab Regular",
                'category' => "Grilled",
                'base_price' => '6.99'
            ],

            [
                'name' => "Lamb Shish Kebab large",
                'category' => "Grilled",
                'base_price' => '8.99'
            ],

            [
                'name' => "Kofta Kebab Regular",
                'category' => "Grilled",
                'base_price' => '5.99'
            ],

            [
                'name' => "Kofta Kebab large",
                'category' => "Grilled",
                'base_price' => '7.99'
            ],

            [
                'name' => "Mixed Shish Kebab Large",
                'category' => "Grilled",
                'base_price' => '8.99'
            ],

            [
                'name' => "Mixed Grilled large",
                'category' => "Grilled",
                'base_price' => '12.99'
            ],

            [
                'name' => " Full chicken grilled",
                'category' => "Grilled",
                'base_price' => '9.99'
            ],

            [
                'name' => "Half  chicken grilled",
                'category' => "Grilled",
                'base_price' => '6.99'
            ],

            [
                'name' => "Grilled salmon",
                'category' => "Grilled",
                'base_price' => '7.99'
            ],

            [
                'name' => "Halloumi Aubergine",
                'category' => "Grilled",
                'base_price' => '5.99'
            ],

            [
                'name' => "Chicken shawarma",
                'category' => "Shawarma",
                'base_price' => '6.50'
            ],

            [
                'name' => "Lamb shawarma",
                'category' => "Shawarma",
                'base_price' => '6.50'
            ],            

            [
                'name' => "Buffalo shawarma chicken",
                'category' => "Shawarma",
                'base_price' => '6.50'
            ],

            [
                'name' => "Buffalo shawarma Lamb",
                'category' => "Shawarma",
                'base_price' => '7.50'
            ],

            [
                'name' => "shawarma special",
                'category' => "Shawarma",
                'base_price' => '6.50'
            ],

            [
                'name' => "BBQ wings",
                'category' => "Sides",
                'base_price' => '4.00'
            ],

            [
                'name' => "Chicken Dippers",
                'category' => "Sides",
                'base_price' => '4.00'
            ],
            
            [
                'name' => "Garlic bread",
                'category' => "Sides",
                'base_price' => '3.00'
            ],

            [
                'name' => "Chicken nuggets",
                'category' => "Sides",
                'base_price' => '3.00'
            ],

            [
                'name' => "Ponds fried cheese",
                'category' => "Sides",
                'base_price' => '3.00'
            ],

            [
                'name' => "Fried mushrooms",
                'category' => "Sides",
                'base_price' => '3.0'
            ],

            [
                'name' => "Onion rings",
                'category' => "Sides",
                'base_price' => '3.00'
            ],

            [
                'name' => "Mozzarella sticks",
                'category' => "Sides",
                'base_price' => '3.50'
            ],

            [
                'name' => "Potato wedges",
                'category' => "Sides",
                'base_price' => '3.50'
            ],

            [
                'name' => "Falafel",
                'category' => "Sides",
                'base_price' => '4.50'
            ],

            [
                'name' => " Kubba",
                'category' => "Sides",
                'base_price' => '4.50'
            ],

            [
                'name' => "Rice",
                'category' => "Sides",
                'base_price' => '3.90'
            ],

            [
                'name' => "Chips Regular",
                'category' => "Sides",
                'base_price' => '2.50'
            ],

            [
                'name' => "Chips Large",
                'category' => "Sides",
                'base_price' => '3.50'
            ],

            [
                'name' => "Garlic Sauce",
                'category' => "Sides",
                'base_price' => '0.50'
            ],

            [
                'name' => "mayonnaise",
                'category' => "Sides",
                'base_price' => '0.50'
            ],

            [
                'name' => "Catchup",
                'category' => "Sides",
                'base_price' => '0.50'
            ],

            [
                'name' => "Tartar",
                'category' => "Sides",
                'base_price' => '0.50'
            ],

            [
                'name' => "Burger sauce",
                'category' => "Sides",
                'base_price' => '0.50'
            ],

            [
                'name' => "Chilli Sauce",
                'category' => "Sides",
                'base_price' => '0.50'
            ],

            [
                'name' => "Sweet Chilli Sauce",
                'category' => "Sides",
                'base_price' => '0.50'
            ],

            [
                'name' => "Fattoush",
                'category' => "Salads",
                'base_price' => '4.50'
            ],

            [
                'name' => "Chicken Caesar salad",
                'category' => "Salads",
                'base_price' => '4.50'
            ],

            [
                'name' => "Green salad",
                'category' => "Salads",
                'base_price' => '4.50'
            ],

            [
                'name' => "Tabula",
                'category' => "Salads",
                'base_price' => '4.50'
            ],

            [
                'name' => "Greek salad",
                'category' => "Salads",
                'base_price' => '4.50'
            ],

            [
                'name' => "Hummus",
                'category' => "Cold mezze",
                'base_price' => '2.99'
            ],

            [
                'name' => "Moutabil",
                'category' => "Cold mezze",
                'base_price' => '2.99'
            ],

            [
                'name' => "Coleslaw",
                'category' => "Cold mezze",
                'base_price' => '2.99'
            ],

            [
                'name' => "Mix olives",
                'category' => "Cold mezze",
                'base_price' => '2.99'
            ],

            [
                'name' => "Jagic",
                'category' => "Cold mezze",
                'base_price' => '2.99'
            ]

        ];
        
        foreach($data as $data)
        {
            HomedItems::forceCreate($data);
        }

        
    }
}
