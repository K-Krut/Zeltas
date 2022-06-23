<?php

namespace App\Repositories;

use App\Interfaces\MetalInterface;
use App\Models\Metal;
use App\Traits\UploadAble;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MetalRepository extends BaseRepository implements MetalInterface
{


    use UploadAble;


    public function __construct(Metal $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function listMetals(string $order = 'id', string $sort = 'desc', array $columns = ['*']): mixed
    {
        return $this->all($columns, $order, $sort);
    }

    public function findMetalById(int $id): mixed
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }
    }

    public function treeList(): mixed
    {
        return Metal::orderByRaw('-name ASC')
            ->get()
            ->nest()
            ->setIndent('|–– ')
            ->listsFlattened('name');
    }

    public function findBySlug($slug): mixed
    {
        return Metal::with('products')
            ->where('slug', $slug)
            ->first();
    }
}
