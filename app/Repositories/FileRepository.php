<?php

namespace App\Repositories;

use App\Models\File;
use App\Repositories\BaseRepository;

/**
 * Class FileRepository
 * @package App\Repositories
 * @version June 17, 2021, 1:40 pm UTC
*/

class FileRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nama',
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
        return File::class;
    }
}
