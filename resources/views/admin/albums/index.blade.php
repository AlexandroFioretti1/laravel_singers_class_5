@extends('layouts.app')

@section('content')


<div class="container pe-3">
    <div class="row flex-row">
    <div class="text-white py-5 d-flex justify-content-between align-items-center">
        <h2 class="text-white">Admin Area</h2>
        
    </div>
    <table>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Release Date</th>
                        <th scope="col">Tracks</th>
                        <th scope="col">Actions</th>
                    
                    </tr>
                </thead>
                <tbody>

                    @forelse ($albums as $album)
                    <tr>
                        <td>{{$album->id}}</td>
                        <td>
                            <img width="100px" src="{{ $album->cover_image }}" alt="">
                        </td>

                        <td>{{$album->name}}</td>
                        
                        <td>{{$album->release_date}}</td>
                        <td>{{$album->tracks}}</td>
                 
                        <td>
                            <a class="btn btn-primary" href="{{route('albums.show', $album->id )}}"
                                role="button">Show</a>
                            <a class="btn btn-warning" href="{{route('albums.edit', $album->id )}}"
                                role="button">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" data-bs-toggle="modal" data-bs-target="#modal{{$album->id}}" class="btn btn-danger">
                                Delete
                            </button>
                        <!-- delete confirmation modal -->
                        <div class="modal fade" id="modal{{$album->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{$album->id}}"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <span class="text-dark">
                                            Are you sure you want to delete
                                            <strong>{{$album->name}}</strong>?
                                        </span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="{{route('albums.destroy', $album->id)}}" method="post"
                                            class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </td>

                    </tr>
                    @empty
                    <h1>There are no Albums at the moment</h1>
                    @endforelse

                </tbody>
            </table>
        </div>

    </table>



<section class="bg-dark text-white">
    
        
        <form class="row g-3 p-5 my-3" action="{{route('singers.store')}}" method="post">
            @csrf

            <div class="col-6">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control " id="name" name="name" value="{{ old('name') }}">
             
            </div>

            <div class="col-6">
                <label for="cover_img" class="form-label">cover_img</label>
                <input type="text" class="form-control " id="cover_img" cover_img="cover_img" value="{{ old('cover_img') }}">
             
            </div>

            <div class="col-6">
                <label for="release_date" class="form-label">release_date</label>
                <input type="date" class="form-control " id="release_date" name="release_date" value="{{ old('release_date') }}">
             
            </div>

            <div class="col-6">
                <label for="tracks" class="form-label">tracks</label>
                <input type="number" step="1" class="form-control " id="tracks" name="tracks" value="{{ old('tracks') }}">
             
            </div>
         
            
            <div class="col-md-4 mx-auto text-center pt-3">
                <button type="submit" class="btn btn-light text-dark px-4">Create</button>
            </div>
        </form>
        </div>
    </div>
</section>



@endsection



