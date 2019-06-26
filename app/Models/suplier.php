<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class suplier
 * @package App\Models
 * @version June 25, 2019, 11:56 pm UTC
 *
 * @property string namaSuplier
 * @property string alamat
 * @property string noTlp
 * @property string email
 * @property string pj
 */
class suplier extends Model
{
    use SoftDeletes;

    public $table = 'supliers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'namaSuplier',
        'alamat',
        'noTlp',
        'email',
        'pj'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'namaSuplier' => 'string',
        'alamat' => 'string',
        'noTlp' => 'string',
        'email' => 'string',
        'pj' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'noTlp' => 'numeric',
        'email' => 'email'
    ];

    
}
