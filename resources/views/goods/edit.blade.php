
@extends('layouts.app')
@section('content')
    <form method='POST' action="{{route('goods.update', [$goods])}}" >@csrf
        <div class="container">
            <table class="table table-striped">
                ID:<input class="form-control" type="text" name="id" value="{{$goods->id}}" disabled>
                name <input class="form-control" type="text" name="good_title" value="{{$goods->title}}">
                description:<input class="form-control" type="text" name="good_description" value="{{$goods->description}}">
                image<input class="form-control" type="text" name="good_image_url" value="{{$goods->image_url}}">
                status<input class="form-control" type="text" name="good_status_id" value="{{$goods->status_id}}">
                price <input class="form-control" type="text" name="good_price" value="{{$goods->price}}">
                category <input class="form-control" type="text" name="good_category" value="{{$goods->category}}">
                @csrf 
            </table>
        </div>
            <button class="btn btn-primary" type='submit'>Add</button>
            <a class="btn btn-secondary" href="{{route('goods.index')}}">Back</a>
    </form>
@endsection