@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4 mb-4">Aggiungi il tuo fumetto qui</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Enter comic name">
                    </div>
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea type="text" name="description" class="form-control" id="description" placeholder="write a description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="thumb">Thumb</label>
                        <input type="text" name="thumb" class="form-control" id="thumb" placeholder="write link">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="enter price">
                    </div>
                    <div class="form-group">
                      <label for="series">Series</label>
                      <input type="text" name="series" class="form-control" id="series" placeholder="write series name">
                    </div>
                    <div class="form-group">
                      <label for="sale_date">Sale Date</label>
                      <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="write date">
                    </div>
                    <div class="form-group">
                      <label for="type">Type</label>
                      {{-- <input type="text" name="type" class="form-control" id="type" placeholder="write type of product"> --}}
                      <select class="form-control" name="type" id="type">
                          <option value="">--select one--</option>
                          <option value="comic book">Comic Book</option>
                          <option value="graphic novel">Graphic Novel</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection