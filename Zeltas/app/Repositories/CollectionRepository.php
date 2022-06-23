<?php

namespace App\Repositories;

use App\Interfaces\CollectionInterface;
use App\Models\Category;
use App\Models\Collection;
use App\Traits\UploadAble;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\UploadedFile;

class CollectionRepository extends BaseRepository implements CollectionInterface
{

    use UploadAble;


    public function __construct(Collection $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function listCollections(string $order = 'id', string $sort = 'desc', array $columns = ['*']): mixed
    {
        return $this->all($columns, $order, $sort);
    }

    public function treeList(): mixed
    {
        return Category::orderByRaw('-name ASC')
            ->get()
            ->nest()
            ->setIndent('|–– ')
            ->listsFlattened('name');
    }

    public function findBySlug($slug): mixed
    {
        return Collection::with('products')
            ->where('slug', $slug)
            ->first();
    }

    public function findCollectionById(int $id): mixed
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    public function createCollection(array $params): mixed
    {
        try {
            $collection = collect($params);

            $featured = $collection->has('featured') ? 1 : 0;

            $merge = $collection->merge(compact('featured'));

            $category = new Category($merge->all());

            $category->save();

            return $category;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    public function updateCollection(array $params): mixed
    {
        $category = $this->findCollectionById($params['id']);

        $collection = collect($params)->except('_token');

        $featured = $collection->has('featured') ? 1 : 0;

        $merge = $collection->merge(compact('featured'));

        $category->update($merge->all());

        return $category;
    }

    public function deleteCollection($id): bool
    {
        $category = $this->findCollectionById($id);

        $category->delete();

        return $category;
    }

}
