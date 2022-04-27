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
                        <!--
            <td><img src="{{'/images/'.$good->image_url}}" alt='{{$good->image_name}}' /></td>
            -->
            <td>{{$goods->status_id}}</td>
            <td>{{$goods->price}}</td>
            <td>{{$goods->category}}</td>
            <td>
            <a class="btn btn-primary" href="{{route('goods.edit',[$goods])}}">Edit</a> 
                    @csrf
            </td>
        </tr>
    </table>
</div>
@endsection
