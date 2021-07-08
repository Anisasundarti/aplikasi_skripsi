<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tahun
 * @package App\Models
 * @version June 3, 2021, 9:39 am UTC
 *
 * @property integer $tahun_kejadian
 */
class Tahun extends Model
{
    use SoftDeletes;

    public $table = 'tahuns';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'tahun_kejadian'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tahun_kejadian' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tahun_kejadian' => 'required'
    ];

    
}
