<?php

namespace App\Repositories;

use App\Models\masukDetail;
use App\Repositories\BaseRepository;

/**
 * Class masukDetailRepository
 * @package App\Repositories
 * @version June 25, 2019, 11:45 pm UTC
*/

class masukDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_masuk',
        'id_barang',
        'quantitas'
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
        return masukDetail::class;
    }
}
