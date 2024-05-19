<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Antrian;
use App\Models\Poli;
use Illuminate\Database\Seeder;

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


        // bikin akun
        \App\Models\User::Create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('superadmin'),
        ]);
        \App\Models\User::Create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        \App\Models\Poli::Create([
            'kode' => 'A',
            'nama_poli' => 'Poli Umum',
        ]);
        \App\Models\Poli::Create([
            'kode' => 'B',
            'nama_poli' => 'Poli Gigi',
        ]);
        \App\Models\Poli::Create([
            'kode' => 'C',
            'nama_poli' => 'Poli KIA (Kesehatan Ibu dan Anak)',
        ]);
        \App\Models\Poli::Create([
            'kode' => 'D',
            'nama_poli' => 'Poli Kusta',
        ]);
        \App\Models\Poli::Create([
            'kode' => 'E',
            'nama_poli' => 'Poli TB Paru',
        ]);
        \App\Models\Poli::Create([
            'kode' => 'F',
            'nama_poli' => 'Poli Anak',
        ]);
        \App\Models\Poli::Create([
            'kode' => 'G',
            'nama_poli' => 'Poli Konsultasi',
        ]);


        $polis = Poli::all();
        foreach ($polis as $p) {
            Antrian::Create([
                'id_poli' => $p->id_poli,
                'antrian' => 1,
            ]);
        }
    }
}
