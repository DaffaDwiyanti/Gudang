<?php

namespace App\Repositories;

use App\Models\order;
use App\Repositories\BaseRepository;

/**
 * Class orderRepository
 * @package App\Repositories
 * @version June 25, 2019, 11:54 pm UTC
*/

class orderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tanggal',
        'jumlah',
        'admin',
        'id_barang',
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
        return order::class;
    }
}
