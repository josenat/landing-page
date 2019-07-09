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
        // registrar usuario por defecto
        $this->call(UsersTableSeeder::class);
        // registrar títulos por defecto
    	$this->call(TitlesTableSeeder::class);
        // registrar imágenes por defecto
        $this->call(ImagesTableSeeder::class);
    }
}
