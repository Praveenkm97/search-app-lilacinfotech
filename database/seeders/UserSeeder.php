<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Designation;
use App\Models\Department;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(50)->create()->each(function ($user) {
            $designation = Designation::inRandomOrder()->first();
            $department = Department::inRandomOrder()->first();
            
            $user->update([
                'designation_id' => $designation->id,
                'department_id' => $department->id,
            ]);
        });
    }
}
