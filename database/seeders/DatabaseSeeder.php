<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        User::create([
            'name' => 'user1',
            'email' => 'uesr1@gmail.com',
            'password' => Hash::make('password'),
        ]);


        Admin::create([
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // Caategory
        $category = ['T-shirt', 'Hat', 'Mobile', 'Laptop', 'MacBook', 'IPhone'];
        foreach ($category as $key => $c) {
            Category::create([
                'slug' => Str::slug($c),
                'name' => $c,
            ]);
        }

        // Brand 
        $category = ['Sansumg', 'Apple', 'Dell', 'Opoo', 'Vivo'];
        foreach ($category as $key => $c) {
            Brand::create([
                'slug' => Str::slug($c),
                'name' => $c,
            ]);
        }


        // Color 
        $category = ['red', 'green', 'blue', 'black', 'white'];
        foreach ($category as $key => $c) {
            Color::create([
                'slug' => Str::slug($c),
                'name' => $c,
            ]);
        }

        // Supplier
        Supplier::create([
            'name' => 'Mg Mg',
            'image' => 'supplier.png',
        ]);
    }
}
