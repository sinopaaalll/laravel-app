<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 5; $i++) { 
            Staff::insert([
                'nip' => Str::random(5),
                'nama' => Str::random(15),
                'email' => Str::random(10).'@gmail.com',
                'posisi' => 'staff',
                'foto' => Str::random(10).'.jpg',
                'created_at' => new \DateTime,
            ]);
        }
        

    }
}
