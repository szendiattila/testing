<?php

namespace App\Http\Contracts;
use App\Product;

/**
 * Interface IProductRepository
 * @package App\Http\Contracts
 */
interface IProductRepository
{
    /**
     * @return mixed
     */
    public function enabledProducts();

    /**
     * @return mixed
     */
    public function allProducts();

    /**
     * @param $request
     * @return mixed
     */
    public function storeProduct($request);

    /**
     * @param $product
     * @param $request
     * @return mixed
     */
    public function updateProduct($product, $request);

    /**
     * @param $product
     * @return mixed
     */
    public function deleteProduct($product);
}