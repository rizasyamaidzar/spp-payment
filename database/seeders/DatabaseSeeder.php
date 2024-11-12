<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\User::factory()->create([
            'name' => 'operator',
            'email' => 'operator@gmail.com',
            'password' => bcrypt('1'),
            'akses' => 'operator',
            'nohp' => '081332667707',
            'nohp_verified_at' => now(),
            'email_verified_at' => now(),
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'wali',
        //     'email' => 'wali@gmail.com',
        //     'password' => bcrypt('1'),
        //     'akses' => 'wali',
        //     'nohp' => '0813326934',
        //     'nohp_verified_at' => now(),
        //     'email_verified_at' => now(),
        // ]);
    }
}
