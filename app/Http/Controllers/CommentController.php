<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class CommentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('comments.create', [
            'comment' => new Comment()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CommentRequest $request
     * @return void
     */
    public function store(CommentRequest $request)
    {
        $params = $request->validated();

        // get file name with Extension
        $imageFileNameWithExt = $request->file('image')->getClientOriginalName();

        // get file name without Extension
        $imageFileName = pathinfo($imageFileNameWithExt, PATHINFO_FILENAME);

        // get Extension
        $extension = $request->file('image')->getClientOriginalExtension();

        // create new file name
        $fileNameToStore = $imageFileName . '_' . time() . '.' . $extension;

        //upload image
        $request->file('image')->storeAs('public/images', $fileNameToStore);

        $params['image'] = $fileNameToStore;

        Comment::create($params);

        return redirect()->route('admin.homePage');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Comment $comment
     * @return Response
     */
    public function edit(Comment $comment)
    {
        return view('comments.edit', [
            'comment' => $comment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CommentRequest $request
     * @param Comment $comment
     * @return Response
     */
    public function update(CommentRequest $request, Comment $comment)
    {
        $params = $request->validated();

        if ($request->file('image') != null) {
            // get file name with Extension
            $imageFileNameWithExt = $request->file('image')->getClientOriginalName();

            // get file name without Extension
            $imageFileName = pathinfo($imageFileNameWithExt, PATHINFO_FILENAME);

            // get Extension
            $extension = $request->file('image')->getClientOriginalExtension();

            // create new file name
            $fileNameToStore = $imageFileName . '_' . time() . '.' . $extension;

            //upload image
            $request->file('image')->storeAs('public/images', $fileNameToStore);

            $params['image'] = $fileNameToStore;
        }

        $comment->update($params);

        return redirect()->route('admin.homePage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Comment $comment
     * @return Response
     * @throws Exception
     */
    public function destroy(Comment $comment)
    {
        File::delete("storage/images/$comment->image");

        $comment->delete();

        return redirect()->route('admin.homePage');
    }
}
