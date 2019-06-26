<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class keluarDetail
 * @package App\Models
 * @version June 25, 2019, 11:43 pm UTC
 *
 * @property string id_keluar
 * @property string id_barang
 * @property integer quantitas
 */
class keluarDetail extends Model
{
    use SoftDeletes;

    public $table = 'keluar_details';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_keluar',
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
        'id_keluar' => 'string',
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
