<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::insert([
            [
                'name' => "Sales and Marketing",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => "Application Developer",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => "HR",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => "Business",
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => "Testing",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
