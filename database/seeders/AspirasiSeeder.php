<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AspirasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = now();
        DB::table('aspirasi')->insert([
            [
               'name' => 'user 1',
               'email' => 'user@gmail.com',
               'aspirasi' => 'website nya bagus mantap',
               'created_at' => $date,
               'updated_at' => $date
            ]
        ]);
    }
}
