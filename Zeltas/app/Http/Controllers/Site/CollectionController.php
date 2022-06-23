<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Interfaces\CollectionInterface;

class CollectionController extends Controller
{
    protected CollectionInterface $collectionRepository;

    public function __construct(CollectionInterface $collectionRepository)
    {
        $this->collectionRepository = $collectionRepository;
    }

    public function show($slug)
    {
        $collection = $this->collectionRepository->findBySlug($slug);
        return view('categories.collection', compact('collection'));
    }

    public function showAll()
    {
        return view('categories.all_collections');
    }
}
