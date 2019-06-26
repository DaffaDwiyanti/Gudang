<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class barangMasuk
 * @package App\Models
 * @version June 26, 2019, 3:14 am UTC
 *
 * @property string tanggal
 * @property string admin
 */
class barangMasuk extends Model
{
    use SoftDeletes;

    public $table = 'barang_masuks';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tanggal',
        'admin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tanggal' => 'string',
        'admin' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tanggal' => 'required',
        'admin' => 'required'
    ];

    
}
