@extends('layouts.app')
@section('content')
    <form method='POST' action="{{route('categories.store')}}">@csrf
        <div class="container">
        <table class="table table-striped" background-color= "green";>
        <tr>
            <th>Category Name</th>
            <th>Category ID</th>
            <th>
                <a class="btn btn-secondary topmenu" href="{{route('categories.index')}}">List of Categories</a>         
            </th>
        </tr>
        <tr>
            <td>
                
                <input class="form-control" type='text' name="Category_CategoryName" placeholder="name"/> 
            </td>
            <td>
                <input  class="form-control" type='text' name="Category_CategoryID" placeholder="id"/>
            </td>
            <td>
                <button class="btn btn-primary" type='submit'>Add</button>
            </td>
        </tr>
    </table>
        </div>
    </form>
@endsection
