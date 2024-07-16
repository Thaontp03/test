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
                'thumbnail' => fake() -> imageUrl('https://i1-vnexpress.vnecdn.net/2024/06/29/0aa0040adb5e7900204f-171962595-3091-8703-1719626024.jpg?w=680&h=408&q=100&dpr=1&fit=crop&s=JDyg3Ee4qQGoa3fMptig5w'),
                'author' => fake() ->name().' '. fake()->lastName(),
                'publisher' =>fake()->text(25),
                'publication' => fake()->date(),
                'price' => rand(10,1000),
                'category_id' =>rand(1,5)
            ]);
        }
    }
}
