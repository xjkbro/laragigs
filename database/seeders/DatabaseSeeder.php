<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Listing::create([
            'title' => 'PHP Developer',
            'tags' => 'PHP, Laravel, Vue.js',
            'company' => 'Acme',
            'location' => 'Remote',
            'email' => 'hr@acme.com',
            'website' => 'https://acme.com',
            'salary' => 100000,
            'description' => 'Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',

        ]);
        Listing::create([
            'title' => 'React Developer',
            'tags' => 'React, React Native, TailwindCSS',
            'company' => 'Apple',
            'location' => 'Culver City, CA',
            'email' => 'hr@apple.com',
            'website' => 'https://apple.com',
            'salary' => 190000,
            'description' => 'Lorem Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',

        ]);

        Listing::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
