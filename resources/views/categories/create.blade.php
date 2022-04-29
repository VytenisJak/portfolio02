@extends('layouts.app')
@section('content')
    <form method='POST' action="{{route('categories.store')}}">@csrf
        <div class="container">
            <table class="table table-striped">
                <input class="form-control" type='text' name="Category_CategoryName" placeholder="name"/>
                <input  class="form-control" type='text' name="Category_CategoryID" placeholder="id"/> 
            </table>
        </div>
        <button class="btn btn-primary" type='submit'>Add</button>
        <a class="btn btn-secondary" href="{{route('categories.index')}}">Back</a>
    </form>
@endsection