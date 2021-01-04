<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'Admin';
        $email = 'n1corek@gmail.com';
        $password = 'n1corek357';
        $password = \Illuminate\Support\Facades\Hash::make($password);
        $add = new \App\User();
        $add->name = $name;
        $add->email = $email;
        $add->password = $password;
        $add->save();
    }
}
