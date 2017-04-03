<?php

namespace App\Http\Controllers;

use App\Http\Contracts\IProductRepository;
use App\Http\Requests\ProductRequest;
use App\Product;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * @var IProductRepository
     */
    protected $productRepository;

    /**
     * ProductController constructor.
     * @param IProductRepository $productRepository
     */
    public function __construct(IProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Lists all products
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = $this->productRepository->allProducts();

        return view('product.index', compact('products'));
    }

    /**
     * Show create form
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * @param ProductRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ProductRequest $request)
    {
        $this->productRepository->storeProduct($request);

        return redirect('dashboard/products');
    }

    /**
     * Show edit form
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Updates a product
     * @param Product $product
     * @param ProductRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Product $product, ProductRequest $request)
    {
        $this->productRepository->updateProduct($product, $request);

        return redirect('dashboard/products');
    }

    public function destroy(Product $product)
    {
        $this->productRepository->deleteProduct($product);

        return redirect('dashboard/products');
    }
}
