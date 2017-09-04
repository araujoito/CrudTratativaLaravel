<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Mauricio',
            'email' => 'araujo@gmail.com',
            'password' => bcrypt('1234')
        ]);
    }
}
