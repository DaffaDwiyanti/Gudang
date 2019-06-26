<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class target
 * @package App\Models
 * @version June 25, 2019, 11:59 pm UTC
 *
 * @property string namaTarget
 * @property integer target
 * @property string tgl_berlaku
 */
class target extends Model
{
    use SoftDeletes;

    public $table = 'targets';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'namaTarget',
        'target',
        'tgl_berlaku'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'namaTarget' => 'string',
        'target' => 'integer',
        'tgl_berlaku' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'target' => 'numeric'
    ];

    
}
