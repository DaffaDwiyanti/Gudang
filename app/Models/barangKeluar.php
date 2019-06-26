<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class barangKeluar
 * @package App\Models
 * @version June 25, 2019, 11:40 pm UTC
 *
 * @property string tanggal
 * @property string admin
 * @property string jenisKeluar
 */
class barangKeluar extends Model
{
    use SoftDeletes;

    public $table = 'barang_keluars';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'tanggal',
        'admin',
        'jenisKeluar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tanggal' => 'date',
        'admin' => 'string',
        'jenisKeluar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tanggal' => 'required',
        'admin' => 'required',
        'jenisKeluar' => 'required'
    ];

    
}
