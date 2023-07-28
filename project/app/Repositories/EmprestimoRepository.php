<?php

namespace App\Repositories;

use App\Models\Emprestimo;
use App\Repositories\BaseRepository;

/**
 * Class ApplianceLineRepository
 * @package App\Repositories
 * @version August 14, 2020, 4:04 pm UTC
*/

class EmprestimoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'status',
        'livro_id',
        'user_id'
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
        return Emprestimo::class;
    }
}
