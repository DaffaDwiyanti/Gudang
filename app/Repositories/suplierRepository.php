<?php

namespace App\Repositories;

use App\Models\suplier;
use App\Repositories\BaseRepository;

/**
 * Class suplierRepository
 * @package App\Repositories
 * @version June 25, 2019, 11:56 pm UTC
*/

class suplierRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'namaSuplier',
        'alamat',
        'noTlp',
        'email',
        'pj'
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
        return suplier::class;
    }
}
