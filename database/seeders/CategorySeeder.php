<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(["carnes", "verduras", "lacteos", "aseo personal", "aseo hogar"])
        ->each(fn($category)=>category::create(['title'=>$category]));
    }


    

}
