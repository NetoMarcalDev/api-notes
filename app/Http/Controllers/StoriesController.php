<?php

namespace App\Http\Controllers;

use App\Storie;

class StoriesController extends BaseController
{
    public function __construct()
    {
        $this->classe = Storie::class;
    }
}
