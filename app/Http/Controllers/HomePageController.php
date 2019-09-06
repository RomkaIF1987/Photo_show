<?php

namespace App\Http\Controllers;

use App\Album;
use App\Comment;
use App\Employee;
use App\Photo;
use App\Question;
use App\Blog;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class HomePageController extends Controller
{
    public function index()
    {
        return view('index', [
            'albums' => Album::all(),
            'comments' => Comment::all(),
            'questions' => Question::all(),
            'blogs' => Blog::paginate(3)
        ]);
    }

    public function projects(Album $album)
    {
        return view('projects', [
            'albums' => Album::all(),
            'blogs' => Blog::paginate(3),
            'album' => $album,
            'photos' => Photo::all()
        ]);
    }

    public function contact()
    {
        return view('contact',[
            'albums' => Album::all(),
            'blogs' => Blog::paginate(3),
        ]);
    }

    public function blog()
    {
        return view('blog', [
            'blogs' => Blog::paginate(3),
            'albums' => Album::all(),
        ]);
    }

    public function blogShow(Blog $blog)
    {
        return view('blog.show', [
            'blog' => $blog,
            'albums' => Album::all(),
            'blogs' => Blog::paginate(3),
        ]);
    }

    public function about()
    {
        return view('about', [
            'albums' => Album::all(),
            'blogs' => Blog::paginate(3),
            'employees' => Employee::all()
        ]);
    }

    public function services()
    {
        return view('services',[
            'albums' => Album::all(),
            'blogs' => Blog::paginate(3),
            'services' => Service::all()
        ]);
    }

    public function getEmail()
    {
        return view('email', [
            'albums' => Album::all(),
            'blogs' => Blog::paginate(3),
        ]);
    }

    public function postEmail()
    {
        return view('email',[
            'albums' => Album::all(),
            'blogs' => Blog::paginate(3),
        ]);
    }

}
