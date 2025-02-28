<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project_tables')->insert([
            [
                'name' => 'School Management System',
                'description' => 'A system to manage school operations',
                'no_users' => 50,
                'status' => 'available',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'E-Commerce Platform',
                'description' => 'An online marketplace for various products',
                'no_users' => 100,
                'status' => 'not available',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hospital Management System',
                'description' => 'A system to manage hospital records and appointments',
                'no_users' => 75,
                'status' => 'available',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
