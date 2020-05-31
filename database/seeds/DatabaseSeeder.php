<?php

use App\Product;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(User::class)->create([
            'name' => 'test',
            'email' => 'test@test.com'
        ]);

        $products = factory(Product::class, 10)->create();
    }
}
