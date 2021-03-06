@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table table-striped">
        <tr>
            <th>@sortablelink('id', 'ID')</th>
            <th>@sortablelink('title', 'Name')</th>
            <th>@sortablelink('description', 'Description')</th>
            <th>@sortablelink('image_url', 'Imgage')</th>
            <th>@sortablelink('status_id', 'Status')</th>
            <th>@sortablelink('price', 'Price')</th>
            <th>@sortablelink('category', 'Category')</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>{{$goods->id}}</td>
            <td>{{$goods->title}}</td>
            <td>{{$goods->description}}</td>                 
            <td>{{$goods->image_url}}</td>
            <td>{{$goods->status_id}}</td>
            <td>{{$goods->price}}</td>
            <td>{{$goods->category}}</td>
            <td>
            <a class="btn btn-primary" href="{{route('goods.edit',[$goods])}}">Edit</a>
            <form method="post" action="{{route('goods.destroy', [$goods])}}'">
                <button class="btn btn-danger" type="submit">Delete</button>
                    @csrf
            </form>
            </td>
        </tr>
    </table>
</div>
@endsection
