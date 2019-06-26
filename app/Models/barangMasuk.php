<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class barangMasuk
 * @package App\Models
 * @version June 25, 2019, 11:44 pm UTC
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
        'tanggal' => 'date',
        'admin' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
