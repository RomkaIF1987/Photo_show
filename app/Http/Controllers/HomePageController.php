<?php

namespace App\Http\Controllers;

use App\Album;
use App\Comment;
use App\Photo;
use App\Question;
use App\Blog;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('index', [
            'albums' => Album::all(),
            'comments' => Comment::all(),
            'questions' => Question::all(),
            'blogs' => Blog::all()
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

    public function blog()
    {
        return view('blog', [
            'blogs' => Blog::paginate(3)
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
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
