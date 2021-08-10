<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Dashboard User
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
        ]);

        // Mobile App Client
        DB::table('clients')->delete();
        DB::table('clients')->insert([
            'name' => 'Test',
            'email' => 'test@e3melBusiness.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
