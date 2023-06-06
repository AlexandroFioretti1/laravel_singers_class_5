<?php

namespace App\Http\Controllers\admin;

use App\Models\Singer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SingerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $singers = Singer::all();
        return view('admin.singers.index', compact('singers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.singers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSingerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSingerRequest $request)
    {
        //
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
        return to_route('admin.singers.index')->with('message', 'Singer deleted successfully!');
    }
}
