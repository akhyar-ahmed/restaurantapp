<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(Order_manipulationsTableSeeder::class);
        $this->call(IncomesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(OnlineOrdersTableSeeder::class);
        $this->call(OnlineOrderManipulationsTableSeeder::class);
        $this->call(OnlineIncomesTableSeeder::class);
        $this->call(HomedItemsSeeder::class);
        $this->call(TawayItemsSeeder::class);
    }
}
