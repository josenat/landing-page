<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Image
 * @package App\Models
 * @version July 8, 2019, 4:59 pm UTC
 *
 * @property string path
 */
class Image extends Model
{
    use SoftDeletes;

    public $table = 'images';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'path' => 'required'
    ];

    /**
     * Obtener todos los títulos vinculados a la imágen
     */
    public function titles()
    {
        return $this->belongsToMany('App\Models\title', 'image_titles');
    } 

    /**
     * Guardar imagen
     */
    public function setPathAttribute($path)
    {
        // si se ha seleccionado un archivo
        if (is_file($path)) {
            // obtenemos la xtensión de archivo original
            $ext = \File::extension($path->getClientOriginalName());            
            // creamos un nuevo nombre de archivo de la siguiente forma
            $name = "bg-showcase-". time() . '.'.$ext;
            // guardamos en base datos el nombre del archivo (ruta)
            $this->attributes['path'] = $name;
            // y luego guardamos el archivo en local
            \Storage::disk('image')->put($name, \File::get($path));            
        } else {
            $this->attributes['path'] = 'NULL';
        }
    } 

    
}
