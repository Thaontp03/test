<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name'=>'Sách đời sống xã hội'],
            ['name'=>'Sách văn học'],
            ['name'=>'Sách pháp luật'],
            ['name'=>'Sách khám phá'],
            ['name'=>'Sách giáo dục']
        ]);
    }
}
