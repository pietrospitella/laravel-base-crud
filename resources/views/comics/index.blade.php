@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4 mb-4">Lista fumetti</h2>
                <table class="table table-light">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Series</th>
                        <th scope="col">Price</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{$comic['id']}}</th>
                            <td>{{$comic['title']}}</td>
                            <td>{{$comic['series']}}</td>
                            <td>{{$comic['price']}} €</td>
                            <td>
                                <a class="btn btn-info" href="{{route('comics.show', $comic['id'])}}">Details</a>
                                <a class="btn btn-warning" href="{{route('comics.edit', $comic['id'])}}">Modify</a>
                                <form method="post" action="{{route('comics.destroy', $comic['id'])}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>                            
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection