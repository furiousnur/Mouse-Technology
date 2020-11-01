<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'id' => 1,
           'first_name' => 'Admin',
           'last_name' => 'Admin',
           'email' => 'admin@gmail.com',
           'mobile' => '12345678900',
           'user_type' => 'admin',
            'city' => 'Dhaka',
            'street' => 'Dhaka',
            'name_of_org' => 'Mouse Technology',
           'password' => bcrypt(12345678)
        ]);
    }
}
