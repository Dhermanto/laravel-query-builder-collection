<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_details')->truncate();
        for ($i=0; $i < 20; $i++) {
            DB::table('user_details')->insert([
                'user_id' => $i + 1,
                'jenis_kelamin' => fake()->randomElement(['l', 'p']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
