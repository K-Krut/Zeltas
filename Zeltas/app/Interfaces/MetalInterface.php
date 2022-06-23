<?php

namespace App\Interfaces;

interface MetalInterface
{

    public function listMetals(string $order = 'id', string $sort = 'desc', array $columns = ['*']): mixed;

    public function findMetalById(int $id): mixed;

//    public function createMetal(array $params): mixed;
//
//    public function updateMetal(array $params): mixed;
//
//    public function deleteMetal($id): bool;

    public function treeList(): mixed;

    public function findBySlug($slug): mixed;
}
