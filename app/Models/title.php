<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class title
 * @package App\Models
 * @version July 7, 2019, 7:12 pm UTC
 *
 * @property string description
 */
class title extends Model
{
    use SoftDeletes;

    public $table = 'titles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'description' => 'required'
    ];

    /**
     * Obtener todas las imágenes vinculadas al título
     */
    public function images()
    {
        return $this->belongsToMany('App\Models\image', 'image_titles');
    } 
    
}
