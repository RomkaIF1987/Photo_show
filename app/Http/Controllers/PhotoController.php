<?php

namespace App\Http\Controllers;

use App\Album;
use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('photos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($album_id)
    {
        return view('photos.create', [
            'album_id' => $album_id,
            'photo' => new Photo()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Album $album, Request $request)
    {
        $this->validate($request, [
            'album_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'photo' => 'image|max:1999'
        ]);

        // get file name with Extension
        $imageFileNameWithExt = $request->file('photo')->getClientOriginalName();

        // get file name without Extension
        $imageFileName = pathinfo($imageFileNameWithExt, PATHINFO_FILENAME);

        // get Extension
        $extension = $request->file('photo')->getClientOriginalExtension();

        // create new file name
        $fileNameToStore = $imageFileName.'_'.time().'.'.$extension;

        //upload image
        $path = $request->file('photo')->storeAs('public/photo', $fileNameToStore);

        // create new Photo
        $photo = Photo::create([
            'album_id' => $request->input('album_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'size' => $request->file('photo')->getClientSize(),
            'photo' => $fileNameToStore
        ]);

        return redirect('/albums/'.$request->input('album_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();

        return back();
    }
}
