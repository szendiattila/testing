<?php

namespace App\Http\Repositories;

use App\Http\Contracts\IProductRepository;
use App\Product;

class ProductRepository implements IProductRepository
{
    /**
     * @return mixed
     */
    public function enabledProducts()
    {
        return Product::whereEnabled(1)->get();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function allProducts()
    {
        return Product::all();
    }

    /**
     * @param $request
     * @return mixed
     */
    public function storeProduct($request)
    {
        return Product::create($request->all());
    }
}