<?php

namespace App\Repositories;

use App\Models\keluarDetail;
use App\Repositories\BaseRepository;

/**
 * Class keluarDetailRepository
 * @package App\Repositories
 * @version June 25, 2019, 11:43 pm UTC
*/

class keluarDetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_keluar',
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
        return keluarDetail::class;
    }
}
