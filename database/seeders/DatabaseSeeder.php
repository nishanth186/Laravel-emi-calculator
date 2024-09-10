<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed the table
        $this->call(LoanDetailsSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
