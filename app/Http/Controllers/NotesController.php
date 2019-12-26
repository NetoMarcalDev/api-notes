<?php

namespace App\Http\Controllers;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends BaseController
{
    public function __construct()
    {
        $this->classe = Note::class;
    }

    public function perPage(Request $request)
    {
        return $this->classe::paginate($request->per_page);
    }
}
