@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4 mb-4">Aggiungi il tuo fumetto qui</h2>
                <form action="{{route('comics.update', $comic['id'])}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                      <label for="title">Title</label>
                      <input value="{{$comic['title']}}" type="text" name="title" class="form-control" id="title" placeholder="Enter comic name">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      {{-- <input value="{{$comic['description']}}" type="text" name="description" class="form-control" id="description" placeholder="write some words about"> --}}
                      <textarea class="form-control" name="description" id="description" value="description">{{$comic['description']}}</textarea> 
                    </div>
                    <div class="form-group">
                        <label for="thumb">Thumb</label>
                        <input value="{{$comic['thumb']}}" type="text" name="thumb" class="form-control" id="thumb" placeholder="write link">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input value="{{$comic['price']}}" type="number" name="price" class="form-control" id="price" placeholder="enter price">
                    </div>
                    <div class="form-group">
                      <label for="series">Series</label>
                      <input value="{{$comic['series']}}" type="text" name="series" class="form-control" id="series" placeholder="write series name">
                    </div>
                    <div class="form-group">
                      <label for="sale_date">Sale Date</label>
                      <input value="{{$comic['sale_date']}}" type="text" name="sale_date" class="form-control" id="sale_date" placeholder="write date">
                    </div>
                    <div class="form-group">
                      <label for="type">Type</label>
                      {{-- <input value="{{$comic['type']}}" type="text" name="type" class="form-control" id="type" placeholder="write type of product"> --}}
                      <select class="form-control" name="type" id="type">
                        <option value="">--select one--</option>
                        <option value="comic book" {{$comic['type'] == 'comic book' ? 'selected' : null }}>Comic Book</option>
                        <option value="graphic novel" {{$comic['type'] == 'graphic novel' ? 'selected' : null }}>Graphic Novel</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection