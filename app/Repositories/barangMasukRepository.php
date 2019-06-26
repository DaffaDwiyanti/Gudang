<?php

namespace App\Repositories;

use App\Models\barangMasuk;
use App\Repositories\BaseRepository;

/**
 * Class barangMasukRepository
 * @package App\Repositories
 * @version June 25, 2019, 11:44 pm UTC
*/

class barangMasukRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tanggal',
        'admin'
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
        return barangMasuk::class;
    }
}
