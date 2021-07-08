<?php

namespace App\Repositories;

use App\Models\Kecamatan;
use App\Repositories\BaseRepository;

/**
 * Class KecamatanRepository
 * @package App\Repositories
 * @version June 3, 2021, 9:42 am UTC
*/

class KecamatanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kecamatan'
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
        return Kecamatan::class;
    }
}
