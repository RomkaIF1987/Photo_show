<?php

namespace App\Http\Controllers;

use App\Album;
use App\Http\Requests\AlbumRequest;
use App\Photo;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
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
     * @return Response
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
     * @param AlbumRequest $request
     * @return Response
     */
    public function store(AlbumRequest $request)
    {
        $params = $request->validated();

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
        Album::create($params);

        return redirect()->route('admin.homePage');
    }

    /**
     * Display the specified resource.
     *
     * @param Album $album
     * @return Response
     */
    public function show(Album $album)
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
     * @return Response
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
     * @param AlbumRequest $request
     * @param Album $album
     * @return Response
     */
    public function update(AlbumRequest $request, Album $album)
    {
        $params = $request->validated();

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
            $request->file('cover_image')->storeAs('public/album_covers', $fileNameToStore);

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
     * @return Response
     * @throws Exception
     */
    public function destroy(Album $album)
    {
        File::delete("storage/album_covers/$album->cover_image");

        $album->delete();

        return redirect()->route('admin.homePage');
    }
}
