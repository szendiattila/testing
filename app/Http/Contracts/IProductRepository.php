<?php

namespace App\Http\Contracts;

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
}