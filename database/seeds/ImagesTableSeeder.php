<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
        	'id'           => 1,
            'path'         => 'bg-masthead.jpg',
			'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'   => null
        ]);

        DB::table('images')->insert([
        	'id'           => 2,
            'path'         => 'bg-showcase-1.jpg',
			'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'   => null
        ]);

        DB::table('images')->insert([
        	'id'           => 3,
            'path'         => 'bg-showcase-2.jpg',
			'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'   => null
        ]);

        DB::table('images')->insert([
        	'id'           => 4,
            'path'         => 'bg-showcase-3.jpg',
			'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'   => null
        ]);
    }
}
