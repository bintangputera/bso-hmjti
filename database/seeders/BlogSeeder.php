<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = now();
        DB::table('blogs')->insert([
            [
               'title' => 'Tes Blog',
               'author' => 'admin',
               'slug' => 'tes-blog',
               'content' => 'lorem ipsum dolor si amet',
               'images' => 'images.jpg',
               'category_id' => 1,
               'created_at' => $date,
               'updated_at' => $date
            ]
        ]);
    }
}
