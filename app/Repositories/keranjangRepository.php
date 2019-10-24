<?php

namespace App\Repositories;

use App\Models\keranjang;
use App\Repositories\BaseRepository;

/**
 * Class keranjangRepository
 * @package App\Repositories
 * @version October 19, 2019, 3:01 am UTC
*/

class keranjangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
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
        return keranjang::class;
    }
}
