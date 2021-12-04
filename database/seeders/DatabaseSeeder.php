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
        \App\Models\User::create([
            'name' => 'Vongima',
            'email' => 'info@vongima.com',
            'password' => '123456',
            'user_type' => 'admin',
        ]);
    }
}
