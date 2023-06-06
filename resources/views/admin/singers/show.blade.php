@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-light my-4">Details of <strong>{{$Singer->artist_name}}</strong> </h1>
        <div class="col-6">
            <img width="400px"  src="{{ $Singer->image_url }}" alt="">
        </div>
        <div class="col-6 text-light">
            <h2 class="pb-3">{{$Singer->artist_name}}</h2>
            <h4 class="pb-3">Fullname: {{$Singer->name." ".$Singer->lastname }}</h4>
            <h6 class="pb-3">Published album: {{$Singer->published_album}}</h6>
            <div class="pb-3">Birthday: {{$Singer->birth_date}}</div>

            <div class="pb-3">
                Is in a band?
                @if ($Singer->is_in_a_band =='1')
                    <i class="fa-solid fa-check text-success"></i>
                    @else
                    <i class="fa-solid fa-xmark text-danger"></i>
                @endif
            </div>
        </div>

    </div>
</div>

@endsection