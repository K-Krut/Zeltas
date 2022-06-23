<?php

namespace App\Repositories;

use App\Interfaces\BaseInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BaseRepository implements BaseInterface
{

    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $attributes) : mixed
    {
        return $this->model->create($attributes);
    }

    public function update(array $attributes, int $id) : mixed
    {
        return $this->find($id)->update($attributes);
    }

    public function all(array $columns = array('*'), string $orderBy = 'id', string $sortBy = 'asc') : mixed
    {
        return $this->model->orderBy($orderBy, $sortBy)->get($columns);
    }

    public function find(int $id) : mixed
    {
        return $this->model->find($id);
    }

    public function findOneOrFail(int $id) : mixed
    {
        return $this->model->findOrFail($id);
    }

    public function findBy(array $data) : mixed
    {
        return $this->model->where($data)->all();
    }

    public function findOneBy(array $data) : mixed
    {
        return $this->model->where($data)->first();
    }

    public function findOneByOrFail(array $data) : mixed
    {
        return $this->model->where($data)->firstOrFail();
    }

    public function delete(int $id) : mixed
    {
        return $this->model->find($id)->delete();
    }
}
