<?php

namespace App\Repositories\Frontend;

interface FrontendRepositoryInterface
{
    public function getFrontend();

    public function getCategory($path);

    public function getProductDetail($path);

    public function getFrontEndInfo();
}