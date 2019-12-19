<?php

namespace App\Http\Controllers;

use App\State;

class StatesController extends BaseController
{
    public function __construct()
    {
        $this->classe = State::class;
    }
}
