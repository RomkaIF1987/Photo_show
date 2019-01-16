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
        return view('albums.create', [
            'album' => new Album()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'cover_image' => 'image|max:1999'
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
        $path = $request->file('cover_image')->storeAs('public/album_covers', $fileNameToStore);

        $params['cover_image'] = $fileNameToStore;

        // create new Album
        $album = Album::create($params);

        return redirect()->route('albums.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        return view('albums.edit', [
            'album' => $album
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        $params = $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'cover_image' => 'image|max:1999'
        ]);

        $fileNameExist = "public/album_covers/$album->cover_image";

dd(Storage::exists($fileNameExist));
        $exist = file_exists("$fileNameExist");
        dd($exist);
        if (file_exists("$fileNameExist")) {
            return $params;
        }
        else {
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

            return $params;
        }

        $album->update($params);

        return redirect()->route('albums.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();

        return redirect()->route('albums.index');
    }
}
