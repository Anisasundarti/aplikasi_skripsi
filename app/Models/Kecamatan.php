<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Kecamatan
 * @package App\Models
 * @version June 3, 2021, 9:42 am UTC
 *
 * @property string $kecamatan
 */
class Kecamatan extends Model
{
    use SoftDeletes;

    public $table = 'kecamatans';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'kecamatan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kecamatan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kecamatan' => 'required'
    ];

    
}
