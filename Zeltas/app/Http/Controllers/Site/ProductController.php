<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Interfaces\CategoryInterface;
use App\Interfaces\CollectionInterface;
use App\Interfaces\ProductInterface;
use Darryldecode\Cart\Exceptions\InvalidItemException;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected ProductInterface $productRepository;
    protected CategoryInterface $categoryRepository;
    protected CollectionInterface $collectionRepository;

    public function __construct(
        ProductInterface    $productRepository,
        CategoryInterface   $categoryRepository,
        CollectionInterface $collectionRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->collectionRepository = $collectionRepository;

    }

    public function show($slug)
    {
        $product = $this->productRepository->findProductBySlug($slug); // dd($product);
        return view('products.product', compact('product'));
    }

    public function addToCart(Request $request)
    {
        $product = $this->productRepository->findProductById($request->input('productId'));

        $options = $request->except('_token', 'productId', 'price', 'qty');

        \Cart::add(uniqid(), $product->name, $request->input('price'), $request->input('qty'), $options);

        return redirect()->back();

    }
}
