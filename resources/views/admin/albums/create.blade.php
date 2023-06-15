@extends('layouts.app')

@section('content')

<div class="bg-dark text-white">
    <div class="container">
    <h2 class="ps-5">Add new album</h2>
    @include('partials.session_message')
    <form class="row g-3 p-5 my-3" action="{{route('albums.store')}}" method="post">
            @csrf

            <div class="col-6">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-6">
                <label for="cover_img" class="form-label">cover_img</label>
                <input type="text" class="form-control @error('cover_img') is-invalid @enderror" id="cover_img" name="cover_img" value="{{ old('cover_img') }}">
                @error('cover_img')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-6">
                <label for="release_date" class="form-label">release_date</label>
                <input type="date" class="form-control @error('release_date') is-invalid @enderror" id="release_date" name="release_date" value="{{ old('release_date') }}">
                @error('release_date')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-6">
                <label for="tracks" class="form-label">tracks</label>
                <input type="number" step="1" class="form-control @error('tracks') is-invalid @enderror" id="tracks" name="tracks" value="{{ old('tracks') }}">
                @error('tracks')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="singer_id" class="form-label">Author</label>
                    <select class="form-select form-select-lg" name="singer_id" id="singer_id">
                        <option value="">Select author</option>
                        @foreach($singers as $singer)
                        <option {{old('singer_id', []) == $singer->id ? 'selected' : ''}} value="{{$singer->id}}">{{$singer->artist_name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('singer_id')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
         
            
            <div class="col-md-4 mx-auto text-center pt-3">
                <button type="submit" class="btn btn-light text-dark px-4">Create</button>
            </div>
        </form>
    </div>
    
        
</div>
@endsection
