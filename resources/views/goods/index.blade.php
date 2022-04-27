
@extends('layouts.app')
@section('content')


<div class="container">
    <table class="table table-striped" background-color= "green";>
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
        @foreach ($goods as $good)
        <tr>
            <td>{{$good->id}}</td>
            <td>{{$good->title}}</td>
            <td>{{$good->description}}</td>
            <td>{{$good->image_url}}</td>
            <td>{{$good->status_id}}</td>
            <td>{{$good->price}}</td>
            <td>{{$good->category}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('goods.edit',[$good->id])}}">Edit</a>
                <a class="btn btn-secondary" href="{{route('goods.show', [$good->id])}}">Show</a>
            </td>
        </tr>
        @endforeach 
    </table>
</div>
@endsection
