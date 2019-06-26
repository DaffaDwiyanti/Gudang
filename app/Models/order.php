<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class order
 * @package App\Models
 * @version June 25, 2019, 11:54 pm UTC
 *
 * @property string tanggal
 * @property integer jumlah
 * @property string admin
 * @property string id_barang
 * @property string id_suplier
 */
class order extends Model
{
    use SoftDeletes;

    public $table = 'orders';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tanggal',
        'jumlah',
        'admin',
        'id_barang',
        'id_suplier'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tanggal' => 'date',
        'jumlah' => 'integer',
        'admin' => 'string',
        'id_barang' => 'string',
        'id_suplier' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'jumlah' => 'numeric'
    ];

    
}
