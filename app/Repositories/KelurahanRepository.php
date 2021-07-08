<?php

namespace App\Repositories;

use App\Models\Kelurahan;
use App\Repositories\BaseRepository;

/**
 * Class KelurahanRepository
 * @package App\Repositories
 * @version June 3, 2021, 9:55 am UTC
*/

class KelurahanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kelurahan',
        'kecamatan_id'
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
        return Kelurahan::class;
    }
}
