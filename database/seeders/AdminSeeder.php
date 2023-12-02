<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'Debbrota Roy',
            'phone' => '01914468204',
            'role' => 'SuperAdmin',
            'email' => 'roydebbrota@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ],
            [
            'name' => 'Monir Hossen',
            'phone' => '01823350456',
            'role' => 'SuperAdmin',
            'email' => 'monirprogrammer@gmail.com ',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ],
            [
            'name' => 'Monir',
            'phone' => '01717578344',
            'role' => 'Admin',
            'email' => 'debbrota@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        ]);
    }
}
