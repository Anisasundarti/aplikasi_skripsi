<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LokasiKejahatan
 * @package App\Models
 * @version December 18, 2020, 12:28 am UTC
 *
 * @property \App\Models\JenisKejahatan $idJenisKejahatan
 * @property integer $id_jenis_kejahatan
 * @property string $nama_lokasi
 * @property string $alamat
 * @property string $gambar
 * @property string $deskripsi
 * @property string $latitude
 * @property string $longitude
 */
class LokasiKejahatan extends Model
{
    use SoftDeletes;

    public $table = 'lokasi_kejahatan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_jenis_kejahatan',
        'nama_lokasi',
        'alamat',
        'gambar',
        'deskripsi',
        'latitude',
        'longitude'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_jenis_kejahatan' => 'integer',
        'nama_lokasi' => 'string',
        'alamat' => 'string',
        'gambar' => 'string',
        'deskripsi' => 'string',
        'latitude' => 'string',
        'longitude' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_jenis_kejahatan' => 'nullable|integer',
        'nama_lokasi' => 'nullable|string|max:255',
        'alamat' => 'nullable|string|max:255',
        'gambar' => 'nullable|string|max:255',
        'deskripsi' => 'nullable|string|max:255',
        'latitude' => 'nullable|string|max:255',
        'longitude' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idJenisKejahatan()
    {
        return $this->belongsTo(\App\Models\JenisKejahatan::class, 'id_jenis_kejahatan');
    }
}
