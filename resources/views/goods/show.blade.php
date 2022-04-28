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
            <form method="post" action="{{route('goods.destroy', [$goods])}}'">

                    @csrf
            </form>
            </td>
        </tr>
    </table>
</div>

<script>
$.ajax({
                type: 'GET',// formoje method POST GET
                url: '/clients/showAjax/' + clientid,// formoje action
                success: function(data) {
                   $('.show-client-id').html(data.clientId);                   
                   $('.show-client-name').html(data.clientName);                   
                   $('.show-client-surname').html(data.clientSurname);                   
                   $('.show-client-description').html(data.clientDescription);                                  
                   $('.show-client-company').html(data.clientCompanyTitle);                                  
                }
            });
            <div class="modal-body">
            <div class="show-client-id">
            </div>  
            <div class="show-client-name">
            </div>
            <div class="show-client-surname">
            </div>  
            <div class="show-client-description">






            style="background-image: url({{ asset('/images/placeholder.png')}})"


<div class="viewgoodtitle"></div>
<div class="viewgooddescription"></div>

<table>
          <thead><div class="viewgoodtitle"></div>
          </thead>
          <tbody class="table">
              <tr>
                  <td><div class="viewgooddescription"></div></td>

              </tr>
              <tr>
          </tbody>
      </table>





























@endsection

        $(document).on('click', '.Ajaxdelete', function() {
            let idfordeletion;
            idfordeletion = $(this).attr('data-id');
            console.log(idfordeletion);
            $.ajax({
                type: 'POST',
                url: '/goods/destroyAjax/' + idfordeletion,
                success: function(data) {
                   console.log(data);
                   $('.client'+clientid).remove();
                    $("#alert").removeClass("d-none");
                    $("#alert").html(data.successMessage);                    
                }
            });
        });


            $(document).on('click', '.Ajaxdelete', function() {
            let idfordeletion;
            idfordeletion = $(this).attr('data-deleteid');
            console.log(idfordeletion);
            $.ajax({
                type: 'POST',
                url: '/goods/destroyAjax/' + idfordeletion,
            });

        });