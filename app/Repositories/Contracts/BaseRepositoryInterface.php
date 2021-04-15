<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

interface BaseRepositoryInterface
{
    /**
     * get model by id
     * @param int $id
     * @return Model
     */
    public function find(int $id): ?Model;

    /**
     * create data
     * @param array $attribute
     * @return Model
     */
    public function create(array $attribute): Model;

    /**
     * update data by id
     * @param array $attribute
     * @return bool
     */
    public function update(array $attribute): Boolean;

}
