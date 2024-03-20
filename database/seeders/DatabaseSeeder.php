<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use App\Models\Branch;
use App\Models\Editor;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(1)->create();
        Admin::factory(1)->create();
        Editor::factory(1)->create();
        // Branch::factory(1)->create();// User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
