<?php

namespace App\Interfaces;

interface CategoryInterface
{

    public function listCategories(string $order = 'id', string $sort = 'desc', array $columns = ['*']): mixed;

    public function findCategoryById(int $id): mixed;

    public function createCategory(array $params): mixed;

    public function updateCategory(array $params): mixed;

    public function deleteCategory($id): bool;

    public function treeList(): mixed;

    public function findBySlug($slug): mixed;
}
