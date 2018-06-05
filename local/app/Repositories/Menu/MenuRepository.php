<?php

namespace App\Repositories\Menu;

use App\CategoryItem;
use App\Menu;
use App\Repositories\EloquentRepository;

class MenuRepository extends EloquentRepository implements MenuRepositoryInterface
{
    public function getModel()
    {
        return Menu::class;
    }

    public function getAllMenu()
    {
        $data='';
        $menuCategory = CategoryItem::where('type', CATEGORY_PRODUCT)->where('isActive', ACTIVE)->orderBy('order','ASC')->get();
        $data['menuCategory']=$menuCategory;
        return $data;
    }

}