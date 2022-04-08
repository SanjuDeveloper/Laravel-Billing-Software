<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usermodels')->insert([
            'name'       => 'Admin',
            'email'      => 'admin@example.com',
            'phone'      => '9997802929',
            'password'   => Hash::make('admin123'),
        ]);
    }
}
