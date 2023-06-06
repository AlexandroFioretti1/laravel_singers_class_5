@extends('layouts.app')

@section('content')

<div class="bg-white py-5 ps-5">
    <a href="{{route('singers.create')}}" role="button">Create</a>
</div>

<div class="container">

    <h2 class="text-white">Admin Area</h2>
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
                <tr class="">
                <td>{{$singer->id}}</td>
                    <td >
                        <img width="100px"  src="{{ $singer->image_url }}" alt="">
                    </td>
                       
                        <td>{{$singer->artist_name}}</td>
                        <td>{{$singer->name." ".$singer->lastname }}</td>
                        <td>{{$singer->birth_date}}</td>
                        <td>{{$singer->published_album}}</td>
                        <td>{{$singer->is_in_a_band}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route('singers.show', $singer->id )}}" role="button">Show</a> 
                            <a class="btn btn-warning" href="{{route('singers.edit', $singer->id )}}" role="button">Edit</a> 
                            DELETE</td>
                        
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