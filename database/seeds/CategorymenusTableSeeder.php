<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorymenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorymenus')->insert([
            'title' => 'Beverages',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categorymenus')->insert([
            'title' => 'Breakfast',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categorymenus')->insert([
            'title' => 'Pastries',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categorymenus')->insert([
            'title' => 'Special Offers',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categorymenus')->insert([
            'title' => 'Lunch and Dinner',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categorymenus')->insert([
            'title' => 'Deserts',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('categorymenus')->insert([
            'title' => 'Extras',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
