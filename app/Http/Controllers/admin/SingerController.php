<?php

namespace App\Http\Controllers\admin;

use App\Models\Album;
use App\Models\Singer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSingerRequest;
use App\Http\Requests\UpdateSingerRequest;
use App\Models\Genre;

class SingerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $singers = Singer::OrderByDesc('id')->get();
        return view('admin.singers.index', compact('singers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $genres = Genre::orderBy('name')->get();
        return view('admin.singers.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSingerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSingerRequest $request)
    {
        $val_data = $request->validated();

        //dd($val_data);

        Singer::create($val_data);
        return to_route('singers.index')->with('message', 'Singer created succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Singer  $Singer
     * @return \Illuminate\Http\Response
     */
    public function show(Singer $Singer)
    {
        return view('admin.singers.show', compact('Singer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Singer  $Singer
     * @return \Illuminate\Http\Response
     */
    public function edit(Singer $Singer)
    {
        return view('admin.singers.edit', compact('Singer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSingerRequest  $request
     * @param  \App\Models\Singer  $Singer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSingerRequest $request, Singer $Singer)
    {
        $val_data = $request->validated();

        $Singer->update($val_data);

        return to_route('singers.index')->with('message', 'Singer updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Singer  $Singer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Singer $Singer)
    {
        $Singer->delete();
        return to_route('singers.index')->with('message', 'Singer deleted successfully!');
    }
}
