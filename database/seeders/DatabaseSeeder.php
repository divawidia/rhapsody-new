<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $data = [
            [
                 'jenis' => 'Instagram'
             ],[
                 'jenis' => 'Facebook',
             ],[
                'jenis' => 'Tiktok',
             ],[
                 'jenis' => 'Youtube',
             ],[
                 'jenis' => 'Teman',
             ],[
                 'jenis' => 'Orang Tua',
             ],[
                 'jenis' => 'Guru',
             ],[
                 'jenis' => 'Yang lain',
             ]
            ];
        DB::table('references')->insert($data);
    }
}
