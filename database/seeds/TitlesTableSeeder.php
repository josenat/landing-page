<?php

use Illuminate\Database\Seeder;

class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
        	'id'            => 1,
            'description'   => '¡Cree una página de destino para su negocio o proyecto y genere más clientes potenciales!',
			'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'    => null
        ]);

        DB::table('titles')->insert([
        	'id'            => 2,
            'description'   => 'Diseño Totalmente Responsivo',
			'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'    => null
        ]);        

        DB::table('titles')->insert([
        	'id'            => 3,
            'description'   => 'Cuando usa un tema creado por Start Bootstrap, sabe que el tema se verá bien en cualquier dispositivo, ya sea en un teléfono, tableta o escritorio, ¡la página se comportará de manera responsable!',
			'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'    => null
        ]);        

        DB::table('titles')->insert([
        	'id'            => 4,
            'description'   => 'Actualizado para Bootstrap 4',
			'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'    => null
        ]);        

        DB::table('titles')->insert([
        	'id'            => 5,
            'description'   => '¡Mejorado recientemente, y lleno de excelentes clases de utilidad, Bootstrap 4 está liderando el camino en el desarrollo web móvil sensible! ¡Todos los temas en Start Bootstrap ahora están usando Bootstrap 4!',
			'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'    => null
        ]);        

        DB::table('titles')->insert([
        	'id'            => 6,
            'description'   => 'Fácil de Usar y Personalizar',
			'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'    => null
        ]);        

        DB::table('titles')->insert([
        	'id'            => 7,
            'description'   => 'La página de destino es solo HTML y CSS con un toque de SCSS para los usuarios que exigen opciones de personalización más profundas. Fuera de la caja, simplemente agregue su contenido e imágenes, ¡y su nueva página de destino estará lista para funcionar!',
			'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'    => null
        ]);        

        DB::table('titles')->insert([
        	'id'            => 8,
            'description'   => '¿Listo para comenzar? ¡Regístrate ahora!',
			'created_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'updated_at'    => \Carbon\Carbon::now()->toDateTimeString(),
			'deleted_at'    => null
        ]);        
    }
}
