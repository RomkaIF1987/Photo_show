<?php

namespace App\Http\Controllers;

use App\Album;
use App\Comment;
use App\Photo;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(Album $album)
    {
        return view('index', [
            'album' => $album->id,
            'comments' => Comment::all()
        ]);
    }

    public function projects(Album $album)
    {
        return view('projects', [
            'album' => $album,
            'photos' => Photo::all()
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function getEmail()
    {
        return view('email');
    }

    public function postEmail()
    {
        return view('email');
    }

}
