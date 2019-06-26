<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class order
 * @package App\Models
 * @version June 26, 2019, 4:38 am UTC
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
        'tanggal' => 'required',
        'jumlah' => 'required',
        'admin' => 'required',
        'id_barang' => 'required',
        'id_suplier' => 'required'
    ];

    
}
