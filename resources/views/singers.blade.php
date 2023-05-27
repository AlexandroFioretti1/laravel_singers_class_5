@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row row-cols-1 row-cols-lg-4">
        @foreach ($singers as $singer)
        <div class="col">
            <div class="card h-100">
                <div class="card-img">
                    <img class="card-img-top" src="{{$singer->image_url}}" alt="">
                </div>
                <div class="card-body">
                    <h4>{{$singer->artist_name}}</h4>
                    @if ($singer->name != null && $singer->lastname != null)
                    <p>Real name : {{$singer->name . " " . $singer->lastname}}</p>
                    @endif
                    <p>Birth date : {{$singer->birth_date}}</p>
                    @if ($singer->is_in_a_band === 1)
                    <span>
                        <a href="#">See The Band</a>
                    </span>
                    @endif
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection