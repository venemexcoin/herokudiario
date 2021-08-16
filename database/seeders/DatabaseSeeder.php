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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::Create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('#ChamocellD3552'),
            'utype' => 'ADM',
        ]);
    }
}
