<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class barang
 * @package App\Models
 * @version June 25, 2019, 11:37 pm UTC
 *
 * @property string id_barang
 * @property string namaBarang
 * @property integer stok
 * @property string deskripsi
 * @property string tgl_kadaluarsa
 * @property string tgl_dibuat
 * @property string id_suplier
 */
class barang extends Model
{
    use SoftDeletes;

    public $table = 'barangs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_barang',
        'namaBarang',
        'stok',
        'deskripsi',
        'tgl_kadaluarsa',
        'tgl_dibuat',
        'id_suplier'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_barang' => 'string',
        'namaBarang' => 'string',
        'stok' => 'integer',
        'deskripsi' => 'string',
        'tgl_kadaluarsa' => 'date',
        'tgl_dibuat' => 'date',
        'id_suplier' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_barang' => 'required',
        'namaBarang' => 'required',
        'stok' => 'numeric',
        'deskripsi' => 'required',
        'tgl_kadaluarsa' => 'required',
        'tgl_dibuat' => 'required',
        'id_suplier' => 'required'
    ];

    
}
