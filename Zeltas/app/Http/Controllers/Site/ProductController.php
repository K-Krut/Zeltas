<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Interfaces\CategoryInterface;
use App\Interfaces\CollectionInterface;
use App\Interfaces\ProductInterface;
use App\Models\Product;
use Darryldecode\Cart\Exceptions\InvalidItemException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function searchProducts(Request $request) {

        $request->validate([
           'query' => 'required|min:3'
        ]);

        $query = $request->input('query');

        $products = Product::where('name', 'like', "%$query%")
            ->orWhere('code', 'like', "%$query%")
            ->orWhere('slug', 'like', "%$query%")
            ->get();

        return view('search_result')->with('products', $products);
    }

    public function addToCart(Request $request)
    {
        $product = $this->productRepository->findProductById($request->input('productId'));

        $options = $request->except('_token', 'productId', 'price', 'qty');

        \Cart::add(uniqid(), $product->name, $request->input('price'), $request->input('qty'), $options);

        return redirect()->back();

    }
}
//if($request->get('search-category')) {
//    $search = $request->get('search-category');
//    $products = Product::join('product_category', 'product.id', '=', 'product_category.product_id')
//        ->join('category', 'category.id', '=', 'product_category.category_id')->where('column_name','LIKE',"%$search%")
//        ->select('product.id', 'product.title', 'product.description', 'product.price')
//        ->get();
//}
//return view('search', compact('products'));
//return DB::table('attribute_values')
//    ->join('items_categories', 'attribute_values.item_category_id', '=', 'items_categories.id')
//    ->where('items_categories.item_id', '=', $this->id)
//    ->select('attribute_values.*')
//    ->get();
