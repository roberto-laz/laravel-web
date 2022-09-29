<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create(
            [
                'concept' => 'order 1 from user 1',
                'discount' => 'blackfriday',
                'price' => 60,
                'user_id' => 1
            ]
        );


       Order::factory(5)->create();

    }
}
