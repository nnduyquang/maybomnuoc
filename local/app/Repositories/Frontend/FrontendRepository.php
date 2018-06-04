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
        $data='';
        $categoryRight=CategoryItem::where('type',CATEGORY_PRODUCT)->where('isActive',ACTIVE)->get();
        $productBestSale=Product::where('isActive',ACTIVE)->where('is_best_sale',BEST_SALE)->get();
        $newProduct=Product::where()->get();
        $data['categoryRight']=$categoryRight;
        $data['productBestSale']=$productBestSale;
        return $data;
    }

    public function getFrontEndInfo()
    {
        // TODO: Implement getFrontEndInfo() method.
    }


}