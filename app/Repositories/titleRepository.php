<?php

namespace App\Repositories;

use App\Models\title;
use App\Repositories\BaseRepository;

/**
 * Class titleRepository
 * @package App\Repositories
 * @version July 7, 2019, 7:12 pm UTC
*/

class titleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'description'
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
        return title::class;
    }
}
