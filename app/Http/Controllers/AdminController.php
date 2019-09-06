<?php

namespace App\Http\Controllers;

use App\Album;
use App\Blog;
use App\Comment;
use App\Employee;
use App\Photo;
use App\Question;
use App\Service;

class AdminController extends Controller
{
    public function index()
    {
        return view('adminPanel.admin', [
            'albums' => Album::all(),
            'photos' => Photo::all(),
            'comments' => Comment::all(),
            'questions' => Question::all(),
            'blogs' => Blog::all(),
            'employees' => Employee::all(),
            'services' => Service::all()
        ]);
    }

}
