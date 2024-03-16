<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Designation;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Designation::insert([
            [
                'name' => "Tester",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => "Android Developer",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => "Ios Developer",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => "Web Developer",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => "Data Analysis",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
