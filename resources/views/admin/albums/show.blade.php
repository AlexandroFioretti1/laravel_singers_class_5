@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-light my-4">Details of <strong>{{$album->name}}</strong> </h1>
        <div class="col-6">
            <img width="400px"  src="{{ $album->cover_img }}" alt="{{$album->name}}">
        </div>
        <div class="col-6 text-light">
            <h2 class="pb-3">{{$album->name}}</h2>
            <h4 class="pb-3">Tracks: {{$album->tracks }}</h4>
            <h6 class="pb-3">Release Date: {{$album->release_date}}</h6>
            <div class="pb-3">Author: {{$album->singer_id?->name}}</div>
        </div>

    </div>
</div>

@endsection