<?php

namespace App\Providers;


use App\Interfaces\CategoryInterface;
use App\Interfaces\CollectionInterface;
use App\Interfaces\MetalInterface;
use App\Interfaces\OrderInterface;
use App\Interfaces\ProductInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\CollectionRepository;
use App\Repositories\MetalRepository;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected array $repositories = [
        CategoryInterface::class => CategoryRepository::class,
        CollectionInterface::class => CollectionRepository::class,
        ProductInterface::class => ProductRepository::class,
        MetalInterface::class => MetalRepository::class,
        OrderInterface::class => OrderRepository::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
