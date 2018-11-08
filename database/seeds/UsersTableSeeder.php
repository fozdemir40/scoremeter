<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "User",
            'email' => "user@test.com",
            'password' => bcrypt('test'),
        ]);

        DB::table('users')->insert([
            'name' => "User2",
            'email' => "user2@test.com",
            'password' => bcrypt('test'),
        ]);

        DB::table('users')->insert([
            'name' => "User3",
            'email' => "user3@test.com",
            'password' => bcrypt('test'),
        ]);
        
    }
}
