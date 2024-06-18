<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Juan cardozo',
            'email' => 'juan@cmb.com',
            'password' => bcrypt('12345678'),
        ]);

        $this->call(CategorySeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ProductSeeder::class);
 
    } //run



}

