@extends('layouts.app')

@section('content')
<section class="bg-dark text-white">
    <div class="container create_container py-5">
        
        <form class="row g-3" action="{{route('singers.store')}}" method="post">
            @csrf

            <div class="col-12">
                <label for="artist_name" class="form-label">artist_name</label>
                <input type="text" class="form-control " id="artist_name" name="artist_name" value="{{ old('artist_name') }}">
             
            </div>

            <div class="col-12">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control " id="name" name="name" value="{{ old('name') }}">
             
            </div>

            <div class="col-12">
                <label for="lastname" class="form-label">lastname</label>
                <input type="text" class="form-control " id="lastname" name="lastname" value="{{ old('lastname') }}">
             
            </div>

            <div class="col-12">
                <label for="image_url" class="form-label">image_url</label>
                <input type="text" class="form-control " id="image_url" name="image_url" value="{{ old('image_url') }}">
             
            </div>
            <div class="col-12">
                <label for="birth_date" class="form-label">birth_date</label>
                <input type="date" class="form-control " id="birth_date" name="birth_date" value="{{ old('birth_date') }}">
             
            </div>
            <div class="col-12">
                <label for="published_album" class="form-label">published_album</label>
                <input type="number" step="1" class="form-control " id="published_album" name="published_album" value="{{ old('published_album') }}">
             
            </div>
      <!--       <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="is_in_a_band" value="false" id="is_in_a_band">
                  <label class="form-check-label" for="is_in_a_band">
                    Is in a Band
                  </label>
                </div>
             
            </div> -->
            
            <div class="col-md-4 mx-auto text-center pt-3">
                <button type="submit" class="btn btn-light text-dark px-4">Create</button>
            </div>
        </form>
    </div>
</section>


@endsection