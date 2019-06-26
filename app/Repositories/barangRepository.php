<?php

namespace App\Repositories;

use App\Models\barang;
use App\Repositories\BaseRepository;

/**
 * Class barangRepository
 * @package App\Repositories
 * @version June 25, 2019, 11:37 pm UTC
*/

class barangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_barang',
        'namaBarang',
        'stok',
        'deskripsi',
        'tgl_kadaluarsa',
        'tgl_dibuat',
        'id_suplier'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return barang::class;
    }
}
