<?php

namespace App\Repositories;

use App\Models\LokasiKejahatan;
use App\Repositories\BaseRepository;

/**
 * Class LokasiKejahatanRepository
 * @package App\Repositories
 * @version February 24, 2021, 10:57 am UTC
*/

class LokasiKejahatanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_jenis_kejahatan',
        'alamat',
        'deskripsi',
        'tahun_kejadian',
        'kelurahan',
        'kecamatan',
     
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
        return LokasiKejahatan::class;
    }
}
