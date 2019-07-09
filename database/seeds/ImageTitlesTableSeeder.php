<?php

use Illuminate\Database\Seeder;

class ImageTitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image_titles')->insert([
        	'id'           => 1,
            'title_id'     => 1,
            'image_id'     => 1,
            'row_num'      => 1,
			'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'   => null
        ]);

        DB::table('image_titles')->insert([
        	'id'           => 2,
            'title_id'     => 2,
            'image_id'     => 2,
            'row_num'      => 2,
			'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'   => null
        ]);

        DB::table('image_titles')->insert([
        	'id'           => 3,
            'title_id'     => 3,
            'image_id'     => 3,
            'row_num'      => 3,
			'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'   => null
        ]);

        DB::table('image_titles')->insert([
        	'id'           => 4,
            'title_id'     => 4,
            'image_id'     => 4,
            'row_num'      => 4,
			'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'   => null
        ]);

        DB::table('image_titles')->insert([
        	'id'           => 5,
            'title_id'     => 5,
            'image_id'     => 5,
            'row_num'      => 5,
			'created_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'   => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'   => null
        ]);

    }
}
