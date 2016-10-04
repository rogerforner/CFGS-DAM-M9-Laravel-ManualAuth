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
        //D'aquesta forma creem un usuari
        factory(\App\User::class,100)->create();
    }
}
