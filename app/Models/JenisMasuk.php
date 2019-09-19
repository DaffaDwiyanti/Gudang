<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JenisMasuk
 * @package App\Models
 * @version September 16, 2019, 10:05 am UTC
 *
 * @property string jenisMasuk
 */
class JenisMasuk extends Model
{
    use SoftDeletes;

    public $table = 'jenis_masuks';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'jenisMasuk'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jenisMasuk' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'jenisMasuk' => 'required'
    ];

    
}
