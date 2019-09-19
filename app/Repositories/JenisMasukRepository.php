<?php

namespace App\Repositories;

use App\Models\JenisMasuk;
use App\Repositories\BaseRepository;

/**
 * Class JenisMasukRepository
 * @package App\Repositories
 * @version September 16, 2019, 10:05 am UTC
*/

class JenisMasukRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jenisMasuk'
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
        return JenisMasuk::class;
    }
}
