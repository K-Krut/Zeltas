<?php

namespace App\Interfaces;

interface BaseInterface
{

    public function create(array $attributes): mixed;

    public function update(array $attributes, int $id): mixed;

    public function all(array $columns = array('*'), string $orderBy = 'id', string $sortBy = 'desc'): mixed;

    public function find(int $id): mixed;

    public function findOneOrFail(int $id): mixed;

    public function findBy(array $data): mixed;

    public function findOneBy(array $data): mixed;

    public function findOneByOrFail(array $data): mixed;

    public function delete(int $id): mixed;
}
