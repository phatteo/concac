<?php

namespace App\Services\Product;

interface ProductServiceInterface
{
    public function getRelatedProducts($product, $limit = 4);
    public function getFeatureProductsByCategory();

    public function getProductOnindex($request);

    public function getProductsByCategory($categoryName, $request);
}
