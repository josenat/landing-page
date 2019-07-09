<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ImageTitle
 * @package App\Models
 * @version July 8, 2019, 5:03 pm UTC
 *
 * @property Number title_id
 * @property Number image_id
 */
class ImageTitle extends Model
{
    use SoftDeletes;

    public $table = 'image_titles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title_id',
        'image_id',
        'row_num'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title_id' => 'required',
        'image_id' => 'required',
        'row_num' => 'required',
    ];

    /**
     * Obtener título vinculado a la imágen
     */
    public function title()
    {
        return $this->hasOne('App\Models\title', 'id', 'title_id');
    }

    /**
     * Obtener imágen vinculada al título
     */
    public function image()
    {
        return $this->hasOne('App\Models\image', 'id', 'image_id');
    } 
}
