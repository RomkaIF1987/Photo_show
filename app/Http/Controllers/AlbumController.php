<?php

namespace App\Http\Controllers;

use App\Album;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('albums.index', [
            'albums' => Album::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.albumCreate', [
            'album' => new Album()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $params = $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'cover_image' => 'image|max:1999',
            'icon_image' => 'image|max:1999'
        ]);
        // get file name with Extension
        $imageFileNameWithExt = $request->file('cover_image')->getClientOriginalName();

        // get file name without Extension
        $imageFileName = pathinfo($imageFileNameWithExt, PATHINFO_FILENAME);

        // get Extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();

        // create new file name
        $fileNameToStore = $imageFileName . '_' . time() . '.' . $extension;

        //upload image
        $request->file('cover_image')->storeAs('public/album_covers', $fileNameToStore);

        $params['cover_image'] = $fileNameToStore;

        // create new Album
        $album = Album::create($params);

        return redirect()->route('admin.homePage');
    }

    /**
     * Display the specified resource.
     *
     * @param Album $album
     * @param Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album, Photo $photo)
    {
        return view('albums.show', [
            'album' => $album,
            'photos' => Photo::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Album $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        return view('adminPanel.albumEdit', [
            'album' => $album
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Album $album
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Album $album)
    {
        $params = $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'cover_image' => 'image|max:1999'
        ]);

        if ($request->hasFile('cover_image')) {

            File::delete("storage/album_covers/$album->cover_image");

            // get file name with Extension
            $imageFileNameWithExt = $request->file('cover_image')->getClientOriginalName();

            // get file name without Extension
            $imageFileName = pathinfo($imageFileNameWithExt, PATHINFO_FILENAME);

            // get Extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            // create new file name
            $fileNameToStore = $imageFileName . '_' . time() . '.' . $extension;

            //upload image
            $path = $request->file('cover_image')->storeAs('public/album_covers', $fileNameToStore);

            // Update Album

            $params['cover_image'] = $fileNameToStore;


        }

        $album->update($params);

        return redirect()->route('admin.homePage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Album $album
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Album $album)
    {
        $album->delete();

        return redirect()->route('albums.index');
    }
}
