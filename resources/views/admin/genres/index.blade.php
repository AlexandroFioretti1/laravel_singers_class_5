@extends('layouts.app')

@section('content')


<div class="container pe-3">

    <div class="text-white py-5 d-flex justify-content-between align-items-center">
        <h2 class="text-white">Admin Area</h2>
        <a href="{{route('genres.create')}}" class="btn btn-light">Add new genre</a>
    </div>
    <table>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($genres as $genre)
                    <tr>
                        <td>{{$genre->id}}</td>
                        <td>{{$genre->name}}</td>
                        <td>{{$genre->slug }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('genres.show', $genre )}}" role="button">Show</a>
                            <a class="btn btn-warning" href="{{route('genres.edit', $genre )}}" role="button">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" data-bs-toggle="modal" data-bs-target="#modal{{$genre->id}}" class="btn btn-danger">
                                Delete
                            </button>
                            <!-- delete confirmation modal -->
                            <div class="modal fade" id="modal{{$genre->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{$genre->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document"">
                                <div class=" modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <span class="text-dark">
                                            Are you sure you want to delete
                                            <strong>{{$genre->title}}</strong>?
                                        </span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form action="{{route('genres.destroy', $genre)}}" method="post" class="d-inline-block">
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
        <h1>There are no genres at the moment</h1>
        @endforelse

        </tbody>
    </table>
</div>

</table>

</div>

@endsection('content')