<?php

namespace App\Http\Controllers;

use App\Album;
use App\Blog;
use App\Comment;
use App\Employee;
use App\Photo;
use App\Question;
use App\Service;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * @return Factory|View
     */
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
