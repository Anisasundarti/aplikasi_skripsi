<?php

namespace App\Repositories;

use App\Models\JenisKejahatan;
use App\Repositories\BaseRepository;

/**
 * Class JenisKejahatanRepository
 * @package App\Repositories
 * @version December 18, 2020, 12:29 am UTC
*/

class JenisKejahatanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jenis_kejahatan'
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
        return JenisKejahatan::class;
    }
}
