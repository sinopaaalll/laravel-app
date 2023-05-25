<?php

namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 5; $i++) { 
            DB::table('barang')->insert([
                'kode' => Str::random(5),
                'nama' => Str::random(15),
                'kategori' => 'electronik',
                'harga' => 1000000,
                'stok' => 1,
                'created_at' => new \DateTime,
            ]);
            // Staff::insert([
            //     'kode' => Str::random(5),
            //     'nama' => Str::random(15),
            //     'posisi' => 'staff',
            //     'harga' => 1000000,
            //     'stok' => 1,
            //     'foto' => Str::random(10).'.jpg',
            //     'created_at' => new \DateTime,
            // ]);
        }
    }
}
