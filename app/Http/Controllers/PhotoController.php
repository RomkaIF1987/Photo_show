<?php

namespace App\Http\Controllers;

use App\Album;
use App\Photo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;

class PhotoController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('photos.create', [
            'albums' => Album::all(),
            'photo' => new Photo()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $params = $this->validate($request, [
            'album_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|max:1999'
        ]);

        // get file name with Extension
        $imageFileNameWithExt = $request->file('image')->getClientOriginalName();

        // get file name without Extension
        $imageFileName = pathinfo($imageFileNameWithExt, PATHINFO_FILENAME);

        // get Extension
        $extension = $request->file('image')->getClientOriginalExtension();

        // create new file name
        $fileNameToStore = $imageFileName . '_' . time() . '.' . $extension;

        //upload image
        $request->file('image')->storeAs('public/photo', $fileNameToStore);

        $params['image'] = $fileNameToStore;

        // create new Image
        Photo::create($params);

        return redirect()->route('admin.homePage');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Photo $photo
     * @return Response
     */
    public function edit(Photo $photo)
    {
        return view('photos.edit', [
            'photo' => $photo,
            'albums' => Album::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Photo $photo
     * @return void
     * @throws ValidationException
     */
    public function update(Request $request, Photo $photo)
    {
        $params = $this->validate($request, [
            'album_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|max:1999'
        ]);

        if ($request->hasFile('image')) {

            File::delete("storage/photo/$photo->image");

            // get file name with Extension
            $imageFileNameWithExt = $request->file('image')->getClientOriginalName();

            // get file name without Extension
            $imageFileName = pathinfo($imageFileNameWithExt, PATHINFO_FILENAME);

            // get Extension
            $extension = $request->file('image')->getClientOriginalExtension();

            // create new file name
            $fileNameToStore = $imageFileName . '_' . time() . '.' . $extension;

            //upload image
            $request->file('image')->storeAs('public/photo', $fileNameToStore);

            $params['image'] = $fileNameToStore;
        }

        $photo->update($params);

        return redirect()->route('admin.homePage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Photo $photo
     * @return Response
     * @throws Exception
     */
    public function destroy(Photo $photo)
    {
        File::delete("storage/photo/$photo->image");

        $photo->delete();

        return back();
    }
}
