<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\BlogRequest;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('blog.create', [
            'blog' => new Blog()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BlogRequest $request
     * @return Response
     */
    public function store(BlogRequest $request)
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

        Blog::create($params);

        return redirect()->route('admin.homePage');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return Response
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', [
            'blog' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BlogRequest $request
     * @param Blog $blog
     * @return Response
     */
    public function update(BlogRequest $request, Blog $blog)
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

        $blog->update($params);

        return redirect()->route('admin.homePage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return void
     * @throws Exception
     */
    public function destroy(Blog $blog)
    {
        File::delete("storage/images/$blog->image");

        $blog->delete();

        return redirect()->route('admin.homePage');
    }
}
