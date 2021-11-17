<?php

namespace App\Repositories;

use App\Models\Songs;
use App\Repositories\BaseRepository;

/**
 * Class SongsRepository
 * @package App\Repositories
 * @version October 26, 2021, 12:46 pm UTC
*/

class SongsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Song_Title',
        'Singer',
        'Genre',
        'Date_Release'
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
        return Songs::class;
    }
}
