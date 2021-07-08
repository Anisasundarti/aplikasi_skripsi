<?php

namespace App\Repositories;

use App\Models\Tahun;
use App\Repositories\BaseRepository;

/**
 * Class TahunRepository
 * @package App\Repositories
 * @version June 3, 2021, 9:39 am UTC
*/

class TahunRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tahun_kejadian'
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
        return Tahun::class;
    }
}
