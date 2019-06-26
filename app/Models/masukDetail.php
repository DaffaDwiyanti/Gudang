<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class masukDetail
 * @package App\Models
 * @version June 25, 2019, 11:45 pm UTC
 *
 * @property string id_masuk
 * @property string id_barang
 * @property integer quantitas
 */
class masukDetail extends Model
{
    use SoftDeletes;

    public $table = 'masuk_details';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_masuk',
        'id_barang',
        'quantitas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_masuk' => 'string',
        'id_barang' => 'string',
        'quantitas' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'quantitas' => 'numeric'
    ];

    
}
