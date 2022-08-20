<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory()->count(10)->create();
        // collect([
        //     [
        //         'name' => 'Bajang Riau',
        //         'email' => 'bajang@gmail.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_At' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Gilang Riau',
        //         'email' => 'gilang@gmail.com',
        //         'password' => bcrypt('password'),
        //         'email_verified_At' => now(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ])->each(function ($user) {
        //     DB::table('users')->insert($user);
        // });
    }
}
