<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JenisKeluar
 * @package App\Models
 * @version September 16, 2019, 10:04 am UTC
 *
 * @property string jenisKeluar
 */
class JenisKeluar extends Model
{
    use SoftDeletes;

    public $table = 'jenis_keluars';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'jenisKeluar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jenisKeluar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'jenisKeluar' => 'required'
    ];

    
}
