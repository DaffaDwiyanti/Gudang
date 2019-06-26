<?php

namespace App\Repositories;

use App\Models\target;
use App\Repositories\BaseRepository;

/**
 * Class targetRepository
 * @package App\Repositories
 * @version June 25, 2019, 11:59 pm UTC
*/

class targetRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'namaTarget',
        'target',
        'tgl_berlaku'
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
        return target::class;
    }
}
