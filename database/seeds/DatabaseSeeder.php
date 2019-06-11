<?php

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
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('perfils')->insert([
            'ciudad' => Str::random(10),
            'pais' => Str::random(10).'@gmail.com',
        ]);
    }
}
