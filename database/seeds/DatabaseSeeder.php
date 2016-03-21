<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users
        DB::table('users')->insert([
        'name' => str_random(10),
        'email' => str_random(10).'@github.com',
        'password' =>  Hash::make('secret'),
        ]);

        //oauth_clients
        DB::table('oauth_clients')->insert([
            'id' => str_random(24),
            'secret' => str_random(31),
            'name' =>  'OAuth App',
        ]);
    }
}
