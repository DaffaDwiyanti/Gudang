<?php

namespace App\Repositories;

use App\Models\barangKeluar;
use App\Repositories\BaseRepository;

/**
 * Class barangKeluarRepository
 * @package App\Repositories
 * @version June 25, 2019, 11:40 pm UTC
*/

class barangKeluarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tanggal',
        'admin',
        'jenisKeluar'
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
        return barangKeluar::class;
    }
}
