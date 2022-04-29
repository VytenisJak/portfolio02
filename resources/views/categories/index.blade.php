@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table table-striped" background-color= "green";>
        <tr>
            <th>@sortablelink('id', 'ID')</th>
            <th>@sortablelink('CategoryName', 'Category Name')</th>
            <th>@sortablelink('CategoryID', 'Category  ID')</th>
            <th>Actions</th>
        </tr>
        @foreach ($categories as $good)
        <tr>
            <td>{{$good->id}}</td>
            <td>{{$good->CategoryID}}</td>
            <td>{{$good->CategoryName}}</td>
            <td>
                <a class="btn btn-primary" href="">Edit</a>
                <a class="btn btn-secondary" href="">Show</a>
                <a class="btn btn-secondary topmenu" href="{{route('categories.create')}}">New</a>
            </td>
        </tr>
        @endforeach 
    </table>
</div>
@endsection