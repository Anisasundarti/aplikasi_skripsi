<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Kelurahan
 * @package App\Models
 * @version June 3, 2021, 9:55 am UTC
 *
 * @property \App\Models\Kecamatan $kecamatan
 * @property string $kelurahan
 * @property unsignedBigInteger $kecamatan_id
 */
class Kelurahan extends Model
{
    use SoftDeletes;

    public $table = 'kelurahans';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'kelurahan',
        'kecamatan_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kelurahan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kelurahan' => 'required',
        'kecamatan_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function kecamatan()
    {
        return $this->belongsTo(\App\Models\Kecamatan::class);
    }
}
