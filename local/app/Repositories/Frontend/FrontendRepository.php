<?php

namespace App\Repositories\Frontend;


use App\CategoryItem;
use App\Config;
use App\Post;
use App\Product;

class FrontendRepository implements FrontendRepositoryInterface
{
    public function getFrontend()
    {
        $data = '';
        $categoryRight = CategoryItem::where('type', CATEGORY_PRODUCT)->where('isActive', ACTIVE)->get();
        $productBestSale = Product::where('isActive', ACTIVE)->where('is_best_sale', BEST_SALE)->get();
        $newProduct = Product::where('isActive', ACTIVE)->orderBy('is_best_sale', 'DESC')->orderBy('created_at', 'DESC')->take(12)->get();
        $data['categoryRight'] = $categoryRight;
        $data['productBestSale'] = $productBestSale;
        $data['newProduct'] = $newProduct;
        $data['type'] = 0;
        return $data;
    }

    public function getCategory($path)
    {
        $data = '';
        $categoryRight = CategoryItem::where('type', CATEGORY_PRODUCT)->where('isActive', ACTIVE)->get();
        $productBestSale = Product::where('isActive', ACTIVE)->where('is_best_sale', BEST_SALE)->get();
        $category = CategoryItem::where('path', $path)->first();
        $newProduct = Product::where('isActive', ACTIVE)->where('category_product_id', $category->id)->orderBy('is_best_sale', 'DESC')->orderBy('created_at', 'DESC')->get();
        $data['categoryRight'] = $categoryRight;
        $data['productBestSale'] = $productBestSale;
        $data['newProduct'] = $newProduct;
        $data['categoryId'] =$category;
        $data['type'] = 1;
        return $data;
    }

    public function getProductDetail($path)
    {
        $data = '';
        $product=Product::where('path',$path)->first();
        $data['product'] = $product;
        return $data;
    }


    public function getFrontEndInfo()
    {
        // TODO: Implement getFrontEndInfo() method.
    }


}