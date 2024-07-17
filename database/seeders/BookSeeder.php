<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<15;$i++){
            DB::table('books')->insert([
                'title' => fake() -> text(25),
                'thumbnail' => fake() -> imageUrl(),
                'author' => fake() ->name().' '. fake()->lastName(),
                'publisher' =>fake()->text(25),
                'publication' => fake()->date(),
                'price' => rand(10,100),
                'quantity' => rand(10,1000),
                'category_id' =>rand(1,5)
            ]);
        }
    }
}
