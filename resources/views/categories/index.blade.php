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
            <td>{{$good->CategoryName}}</td>
            <td>{{$good->CategoryID}}</td>
            <td>
                <button class="btn btn-danger" type="submit">Delete</button>
            </td>
        </tr>
        @endforeach 
    </table>
</div>
@endsection