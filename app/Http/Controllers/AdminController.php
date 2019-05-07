<?php

namespace App\Http\Controllers;

use App\Album;
use App\Comment;
use App\Photo;

class AdminController extends Controller
{
    public function index()
    {
        return view('adminPanel.admin', [
            'albums' => Album::all(),
            'photos' => Photo::all(),
            'comments' => Comment::all()
        ]);
    }

}
