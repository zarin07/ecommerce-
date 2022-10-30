<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
         $faker=Faker::create(10);
        Product::create([
                'name' => $faker->word(),
                'brand' =>$faker->sentence(),
                'description' => $faker->paragraph(),
                'price' =>$faker->numberBetween(100, 1000),
                'quantity' => $faker->numberBetween(10, 100),
                'tags' => $faker->sentence(3),
            ]);
        
    }
}
