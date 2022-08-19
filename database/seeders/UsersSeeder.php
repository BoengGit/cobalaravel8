<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'Bajang Riau',
                'email' => 'bajang@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_At' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gilang Riau',
                'email' => 'gilang@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_At' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ])->each(function ($user) {
            DB::table('users')->insert($user);
        });
    }
}
