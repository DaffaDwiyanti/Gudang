<?php

namespace App\Repositories;

use App\Models\JenisKeluar;
use App\Repositories\BaseRepository;

/**
 * Class JenisKeluarRepository
 * @package App\Repositories
 * @version September 16, 2019, 10:04 am UTC
*/

class JenisKeluarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return JenisKeluar::class;
    }
}
