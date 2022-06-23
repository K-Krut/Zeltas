<?php

namespace App\Interfaces;

interface CollectionInterface
{

    public function listCollections(string $order = 'id', string $sort = 'desc', array $columns = ['*']): mixed;

    public function findCollectionById(int $id): mixed;

    public function createCollection(array $params): mixed;

    public function updateCollection(array $params): mixed;

    public function deleteCollection($id): bool;

    public function treeList(): mixed;

    public function findBySlug($slug): mixed;
}
