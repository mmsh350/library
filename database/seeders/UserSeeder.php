<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Hamidu',
            'last_name' => 'Muhammad',
            'email' => 'sani.muhammad38@gmail.com',
            'password' => Hash::make('password'),
            'phone_number'=>'08103440497',
            'role'=>'admin',
            'is_active' =>true,
            'created_at' => Carbon::now(),
        ]);
    }
}
