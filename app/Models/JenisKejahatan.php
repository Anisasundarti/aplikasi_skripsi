<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JenisKejahatan
 * @package App\Models
 * @version December 18, 2020, 12:29 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $lokasiKejahatans
 * @property string $jenis_kejahatan
 */
class JenisKejahatan extends Model
{
    use SoftDeletes;

    public $table = 'jenis_kejahatan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'jenis_kejahatan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jenis_kejahatan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'jenis_kejahatan' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function lokasiKejahatans()
    {
        return $this->hasMany(\App\Models\LokasiKejahatan::class, 'id_jenis_kejahatan');
    }
}
