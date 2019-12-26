<?php

namespace App\Http\Controllers;

use App\Storie;

class StoriesController extends BaseController
{
    public function __construct()
    {
        $this->classe = Storie::class;
    }

    public function searchForNote(int $idNote)
    {
        $stories = $this->classe::query()
            ->where('id_note', $idNote)
            ->get();
        return $stories;
    }
}
