<?php

namespace Database\Seeders;

use App\Models\User;
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
    // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',    //admin@admin.com  12345
            'username' => 'admin',
            'password' => bcrypt('12345'),
            'email_verified_at' => now(),
        ]);
    }
}
