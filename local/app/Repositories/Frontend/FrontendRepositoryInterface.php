<?php

namespace App\Repositories\Frontend;

interface FrontendRepositoryInterface
{
    public function getFrontend();

    public function getCategory($path);

    public function getProductDetail($path);

    public function getAllSidebar();

    public function getAllNews();

    public function getNewsDetail($path);

    public function getFrontEndInfo();

    public function getSearch($keySearch);

    public function getDataConfig();
}