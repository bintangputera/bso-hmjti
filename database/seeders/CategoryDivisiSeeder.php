<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryDivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = now();
        DB::table('category_divisi')->insert([
        [
            'divisi_name' => 'Divisi Perhub',
            'desc' => 'Perhubungan',
            'created_at' => $date,
            'updated_at' => $date
        ],[
            'divisi_name' => 'BPH',
            'desc' => 'Badan Pengurus Harian',
            'created_at' => $date,
            'updated_at' => $date
        ],[
            'divisi_name' => 'Divisi MinBak',
            'desc' => 'Minat dan Bakat',
            'created_at' => $date,
            'updated_at' => $date
        ],[
            'divisi_name' => 'Divisi KWU',
            'desc' => 'Kewirausahaan',
            'created_at' => $date,
            'updated_at' => $date
        ],[
            'divisi_name' => 'Divisi Administrasi',
            'desc' => '-',
            'created_at' => $date,
            'updated_at' => $date
        ]
        ]);
    }
}
