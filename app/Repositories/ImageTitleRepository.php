<?php

namespace App\Repositories;

use App\Models\ImageTitle;
use App\Repositories\BaseRepository;

/**
 * Class ImageTitleRepository
 * @package App\Repositories
 * @version July 8, 2019, 5:03 pm UTC
*/

class ImageTitleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title_id',
        'image_id',
        'row_num'
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
        return ImageTitle::class;
    }
}
