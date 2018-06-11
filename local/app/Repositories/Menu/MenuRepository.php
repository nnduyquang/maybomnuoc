<?php

namespace App\Repositories\Menu;

use App\CategoryItem;
use App\Menu;
use App\Post;
use App\Repositories\EloquentRepository;

class MenuRepository extends EloquentRepository implements MenuRepositoryInterface
{
    public function getModel()
    {
        return Menu::class;
    }

    public function getAllMenu()
    {
        $data = '';
        $menuCategory = CategoryItem::where('type', CATEGORY_PRODUCT)->where('isActive', ACTIVE)->orderBy('order', 'ASC')->get();
        $menuService = Post::where('category_item_id', 74)->where('isActive', ACTIVE)->get();
        $data['menuCategory'] = $menuCategory;
        $data['menuService'] = $menuService;
        return $data;
    }

}