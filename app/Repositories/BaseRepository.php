<?php
namespace App\Repositories;

use App\Repositories\Contracts\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    /**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @inheritDoc
     */
    public function find(int $id): ?Model
    {
        return $this->model->find($id);
    }

    /**
     * @inheritDoc
     */
    public function create(array $attribute): Model
    {
        return $this->model->create($attribute);
    }

    /**
     * @inheritDoc
     */
    public function update(array $attribute): Boolean
    {
        return $this->model->update($attribute);
    }
}
