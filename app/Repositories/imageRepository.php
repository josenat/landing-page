<?php

namespace App\Repositories;

use App\Models\image;
use App\Repositories\BaseRepository;

/**
 * Class imageRepository
 * @package App\Repositories
 * @version July 7, 2019, 10:32 pm UTC
*/

class imageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'path'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return image::class;
    }
}
