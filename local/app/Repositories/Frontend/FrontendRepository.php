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
        $newProduct = Product::where('isActive', ACTIVE)->orderBy('is_best_sale', 'DESC')->orderBy('created_at', 'DESC')->take(12)->get();
        $data['newProduct'] = $newProduct;
        $data['type'] = 0;
        return $data;
    }

    public function getCategory($path)
    {
        $data = '';
        $category = CategoryItem::where('path', $path)->first();
        $newProduct = Product::where('isActive', ACTIVE)->where('category_product_id', $category->id)->orderBy('is_best_sale', 'DESC')->orderBy('created_at', 'DESC')->get();
        $data['newProduct'] = $newProduct;
        $data['categoryId'] = $category;
        $data['type'] = 1;
        return $data;
    }

    public function getProductDetail($path)
    {
        $data = '';
        $product = Product::where('path', $path)->first();
        $other = Product::where('category_product_id', $product->category_product_id)->where('id', '!=', $product->id)->orderBy('updated_at', 'DESC')->take(6)->get();
        $data['product'] = $product;
        $data['other'] = $other;
        return $data;
    }

    public function getAllSidebar()
    {
        $data = '';
        $categoryRight = CategoryItem::where('type', CATEGORY_PRODUCT)->where('isActive', ACTIVE)->orderBy('order', 'ASC')->get();
        $productBestSale = Product::where('isActive', ACTIVE)->where('is_best_sale', BEST_SALE)->get();
        $data['categoryRight'] = $categoryRight;
        $data['productBestSale'] = $productBestSale;
        return $data;
    }

    public function getAllNews()
    {
        $data = '';
        $post = Post::where('category_item_id', 71)->where('isActive', ACTIVE)->orderBy('created_at', 'DESC')->get();
        $categoryPost = CategoryItem::where('id', 71)->first();
        $data['post'] = $post;
        $data['categoryPost'] = $categoryPost;
        $data['type'] = 0;
        return $data;
    }

    public function getNewsDetail($path)
    {
        $data = '';
        $post = Post::where('path', $path)->first();
        $data['post'] = $post;
        $data['type'] = 1;
        return $data;
    }

    public function getSearch($keySearch)
    {
        $data = [];
        $keySearch = preg_replace('/\s+/', ' ', $keySearch);
        $newProduct = Product::where('name', 'like', '%' . $keySearch . '%')->orderBy('is_best_sale', 'DESC')->orderBy('created_at', 'DESC')->get();
        $data['newProduct'] = $newProduct;
        $data['key-search'] = $keySearch;
        $data['type'] = 2;
        return $data;
    }


    public function getFrontEndInfo()
    {
        $data = '';
        $footerCategory = CategoryItem::where('type', CATEGORY_PRODUCT)->where('isActive', ACTIVE)->orderBy('order', 'ASC')->get();
        $data['footerCategory'] = $footerCategory;

        return $data;
    }

    public function getDataConfig()
    {
        $data = [];
        $configs = Config::whereIn('name', ['config-phone', 'config-email', 'config-address','config-contact'])->orderBy('order')->get();
        foreach ($configs as $key => $item) {
            if ($item->name == 'config-phone'){
                $data['config-phone'] = $item->content;
                $data['config-phone-2'] = str_replace('.','',$item->content);
            }
            if ($item->name == 'config-email')
                $data['config-email'] = $item->content;
            if ($item->name == 'config-address')
                $data['config-address'] = $item->content;
            if ($item->name == 'config-contact')
                $data['config-contact'] = $item->content;
        }
        return $data;
    }


}