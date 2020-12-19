<?php

namespace App\Repositories;

use App\Models\LokasiKejahatan;
use App\Repositories\BaseRepository;

/**
 * Class LokasiKejahatanRepository
 * @package App\Repositories
 * @version December 18, 2020, 12:28 am UTC
*/

class LokasiKejahatanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_jenis_kejahatan',
        'nama_lokasi',
        'alamat',
        'gambar',
        'deskripsi',
        'latitude',
        'longitude'
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
