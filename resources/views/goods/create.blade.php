@extends('layouts.app')
@section('content')
    <form method='POST' action="{{route('goods.store')}}" >@csrf
        <div class="container">
            <table class="table table-striped">
                <form method='POST' action="{{route('goods.store')}}" >
                <input class="form-control" type='text' name="good_title" placeholder="Name"/>
                <input  class="form-control" type='text' name="good_description" placeholder="Description"/>
                <input  class="form-control" type='text' name="good_image_url" placeholder="Imgage"/>
                <input class="form-control" type='text' name="good_status_id" placeholder="Status"/>
                <input  class="form-control" type='text' name="good_price" placeholder="Price"/>
                <input  class="form-control" type='text' name="good_category" placeholder="Category"/>@csrf 
            </table>
        </div>
        <button class="btn btn-primary" type='submit'>Add</button>
        <a class="btn btn-secondary" href="{{route('goods.index')}}">Back</a>
    </form>
@endsection

