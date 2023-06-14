<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Singer;
use App\Models\Album;
use App\Http\Requests\StoreAlbumRequest;
use App\Http\Requests\UpdateAlbumRequest;
use Illuminate\Support\Str;


class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::orderByDesc('id')->get();
        return view ('admin.albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $singers = Singer::orderBy('artist_name')->get();
        return view('admin.albums.create', compact('singers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlbumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlbumRequest $request)
    {
        
        $val_data = $request->validated();

        $slug = Str::slug($request->name);
        //dd($slug);
        $val_data['slug'] = $slug;

        Album::create($val_data);
        return to_route('albums.index')->with('message', 'album created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return view('admin.albums.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        $singers = Singer::orderBy('artist_name')->get();
        return view('admin.albums.edit', compact('album', 'singers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlbumRequest  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlbumRequest $request, Album $album)
    {
        $val_data = $request->validated();

        $slug = Str::slug($request->name);
        //dd($slug);
        $val_data['slug'] = $slug;

        $album->update($val_data);
        return to_route('albums.index')->with('message', 'Album updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return to_route('albums.index')->with('message', 'Album deleted successfully');
    }
}
