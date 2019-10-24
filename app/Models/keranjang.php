<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class keranjang
 * @package App\Models
 * @version October 19, 2019, 3:01 am UTC
 *
 * @property string user_id
 * @property string id_barang
 * @property string quantitas
 */
class keranjang extends Model
{
    use SoftDeletes;

    public $table = 'keranjangs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
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
        'user_id' => 'string',
        'id_barang' => 'string',
        'quantitas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
