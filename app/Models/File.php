<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class File
 * @package App\Models
 * @version June 17, 2021, 1:40 pm UTC
 *
 * @property string $Nama
 * @property string $path
 */
class File extends Model
{
    use SoftDeletes;

    public $table = 'files';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
