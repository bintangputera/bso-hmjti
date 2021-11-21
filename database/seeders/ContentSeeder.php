<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = now();
        DB::table('content')->insert([
            [
                'visi' => 'Terwujudnya HMJ TI yang aktif, inovatif, dan komunikatif serta meningkatkan pelayanan pengabdian untuk JTI yang lebih baik.',
                'misi' => 'tes misi',
                'moto' => 'Bersinergi Dari Hati, Berdedikasi Untuk TI',
                'desc' => 'tes desc',
                'banner' => 'images.jpg',
                'created_at' => $date,
                'updated_at' => $date
            ]
        ]);
    }
}
