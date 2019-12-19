<?php

namespace App\Http\Controllers;
use App\SearchType;

class SearchTypesController extends BaseController
{
    public function __construct()
    {
        $this->classe = SearchType::class;
    }
}
