<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Interfaces\MetalInterface;
use Illuminate\Http\Request;

class MetalController extends Controller
{
    protected MetalInterface $metalRepository;

    public function __construct(MetalInterface $metalRepository)
    {
        $this->metalRepository = $metalRepository;
    }

    public function show($slug)
    {
        $metal = $this->metalRepository->findBySlug($slug);

        return view('categories.metal', compact('metal'));
    }
}
