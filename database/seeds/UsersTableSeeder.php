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
        // creamos un usuario por defecto
        App\User::create([
        	'name'              => 'Jhonder Natera',
			'email'             => 'jhonder.natera@gmail.com',
			'email_verified_at' => now(),
			'password'          => bcrypt('10203040'),
			'remember_token'    => Str::random(10),								
        ]);
    }
}
