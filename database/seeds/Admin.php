<?php

use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->name = "admin";
        $user->email = "admin@gmail.com";
        $user->password = \Hash::make('asdasd');
        $user->save();
    }
}
