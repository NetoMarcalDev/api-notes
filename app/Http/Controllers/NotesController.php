<?php

namespace App\Http\Controllers;
use App\Note;

class NotesController extends BaseController
{
    public function __construct()
    {
        $this->classe = Note::class;
    }
}
