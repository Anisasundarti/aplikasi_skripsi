<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LokasiKejahatan
 * @package App\Models
 * @version February 24, 2021, 10:57 am UTC
 *
 * @property integer $id_jenis_kejahatan
 * @property string $alamat
 * @property string $gambar
 * @property string $deskripsi
 * @property string $tahun_kejadian
 * @property string $kelurahan
 * @property string $kecamatan
 * @property string $potensi_kerawanan
 * @property string $koordinat
 */
class LokasiKejahatan extends Model
{
    use SoftDeletes;

    public $table = 'lokasi_kejahatans';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_jenis_kejahatan',
        'alamat',
        'deskripsi',
        'tahun_id',
        'kelurahan_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_jenis_kejahatan' => 'integer',
        'alamat' => 'string',
        'deskripsi'=> 'string',
        'tahun_id' => 'integer',
        'kelurahan_id' => 'integer',

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_jenis_kejahatan' => 'required',
        'alamat' => 'required',
        'deskripsi' => 'required',
        'tahun_id' => 'required',
        'kelurahan_id' => 'required',
    ];

    public function JenisKejahatan(){
        return $this->belongsTo('App\Models\JenisKejahatan','id_jenis_kejahatan','id');

    }

    public function Tahun(){
        return $this->belongsTo('App\Models\Tahun','tahun_id','id');
        
    }

    public function Kelurahan(){
        return $this->belongsTo('App\Models\Kelurahan','kelurahan_id','id');
        
    }
    
}
