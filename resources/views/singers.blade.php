@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row row-cols-1 row-cols-lg-4 g-4">
        @foreach ($singers as $singer)
        <div class="col">
            <div class="card h-100 rounded-0 border-0 p-2">
                <div class="card-img rounded-0">
                    {{-- <img class="card-img-top rounded-0" src="{{$singer->image_url}}" alt=""> --}}
                    <img class="card-img-top rounded-0" src="https://indiehoy.com/wp-content/uploads/2023/01/thom-yorke-2.jpg" alt="">
                </div>
                <div class="card-body">
                    <h4>{{$singer->artist_name}}</h4>
                    @if ($singer->name != null && $singer->lastname != null)
                    <p>Real name : {{$singer->name . " " . $singer->lastname}}</p>
                    @endif
                    <p>Birth date : {{$singer->birth_date}}</p>
                    @if ($singer->is_in_a_band === 1)
                    <span>
                        <a href="#" class="bg-white text-dark">See The Band</a>
                    </span>
                    @endif
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection