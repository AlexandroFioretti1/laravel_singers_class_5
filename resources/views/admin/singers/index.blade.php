@extends('layouts.app')

@section('content')


<div class="container pe-3">
    
    <div class="text-white py-5 d-flex justify-content-between align-items-center">
        <h2 class="text-white">Admin Area</h2>
        <a href="{{route('singers.create')}}" class="btn btn-light">Add new Singer</a>
    </div>
    <table>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Artist Name</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Birthdate</th>
                        <th scope="col">Published Album</th>
                        <th scope="col">Is in a Band</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($singers as $singer)
                    <tr>
                        <td>{{$singer->id}}</td>
                        <td>
                            <img width="100px" src="{{ $singer->image_url }}" alt="">
                        </td>

                        <td>{{$singer->artist_name}}</td>
                        <td>{{$singer->name." ".$singer->lastname }}</td>
                        <td>{{$singer->birth_date}}</td>
                        <td>{{$singer->published_album}}</td>
                        <td> 
                            @if($singer->is_in_a_band === 1)
                                Yes
                            @else 
                                No 
                            @endif 
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{route('singers.show', $singer->id )}}"
                                role="button">Show</a>
                            <a class="btn btn-warning" href="{{route('singers.edit', $singer->id )}}"
                                role="button">Edit</a>
                            <!-- Button trigger modal -->
                            <button type="button" data-bs-toggle="modal" data-bs-target="#modal{{$singer->id}}" class="btn btn-danger">
                                Delete
                            </button>
                        <!-- delete confirmation modal -->
                        <div class="modal fade" id="modal{{$singer->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{$singer->id}}"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document"">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <span class="text-dark">
                                            Are you sure you want to delete
                                            <strong>{{$singer->title}}</strong>?
                                        </span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="{{route('singers.destroy', $singer->id)}}" method="post"
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
                    <h1>There are no Singers at the moment</h1>
                    @endforelse

                </tbody>
            </table>
        </div>

    </table>

</div>



@endsection('content')