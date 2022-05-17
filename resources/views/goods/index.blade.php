@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table table-striped">
        <tr>
            <th>Sort by:</th>
            <th>@sortablelink('title', 'Name')</th>
            <th>@sortablelink('price', 'Price')</th>
            <th>@sortablelink('category', 'Category')</th>
            <th>Search</th>
        </tr>
    </table>
    @foreach ($goods as $good)
    <table class="tableinfo">
        <tr><th>
            <div class="infobox showitem" data-bs-toggle="modal" data-bs-target="#viewSingleItem" data-goodid= "{{$good->id}}" style="background-image: url({{ asset('/images/placeholder.png')}})" alt="{{$good->image_name}}">
                <div class="title">{{$good->title}}</div>
                <div class="price">{{$good->price}} €</div>
            </div>
        </th></tr><tr><td class="buttons text-center">
            <button class="btn btn-secondary editgoods" data-bs-toggle="modal" data-bs-target="#editSingleItem" data-goodid="{{$good->id}}">Edit</button>
            <button class="btn btn-danger deletegoods" type="submit" data-goodid="{{$good->id}}">Delete</button>
        </td></tr>
    </table>
    @endforeach
</div>

<script>
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
    //CREATE NEW ITEM
        $("#AddAjax").click(function() {
            let good_title;
            let good_description;
            let good_image_url;
            let good_image_name;
            let good_status_id;
            let good_price;
            let good_category;
            let good_category_id;

            good_title = $('#Title').val();
            good_description = $('#Description').val();
            good_image_url = $('#Imgage').val();
            good_image_name = $('#ImageName').val();
            good_status_id = $('#Status').val();
            good_price = $('#Price').val();
            good_category = $('#Category').val();
            good_category_id = $('#Category_id').val();
            $.ajax({
                type: 'POST',
                url: '{{route("goods.storeAjax")}}',
                 data: {
                    good_title: good_title, 
                    good_description: good_description, 
                    good_image_url: good_image_url,
                    good_image_name: good_image_name, 
                    good_status_id: good_status_id, 
                    good_price: good_price,
                    good_category: good_category,
                    good_category_id: good_category_id, 
                },
                success: function(data) { //closes modal upon success
                    $("#createNewItem").hide();
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    $('body').css({overflow:'auto'});
                    location.reload();
                }
            });
        });
    //DELETE
        $(document).on('click', '.deletegoods', function() {
            let itemid;
            itemid = $(this).attr('data-goodid');
            $.ajax({
                type: 'POST',
                url: '/goods/deleteAjax/'+itemid,
                success: function(data) {
                    location.reload();                    
                }
            });
        });

    //VIEW SINGLE
        $(document).on('click', '.showitem', function() {
            let itemid;
            itemid = $(this).attr('data-goodid');
            $.ajax({
                type: 'GET',
                 url: '/goods/showAjax/' + itemid,
                success: function(data) {
                    $('.ViewTitle').html(data.GoodTitle);
                    $('.ViewCategoryID').html('categories: '+data.GoodCategoryID);                     
                    $('.ViewDescription').html(data.GoodDescription);                   
                    $('.ViewImgage').html(data.GoodImage);               
                    $('.ViewPrice').html(data.GoodPrice+' €');                                  
                    $('.ViewCategory').html('category: '+data.GoodCategory);                                
                }
            });
        });
    //EDIT&UPDATE
        $(document).on('click', '.editgoods', function() {
            let itemid;
            itemid = $(this).attr('data-goodid');
            $.ajax({
                type: 'GET',
                url: '/goods/showAjax/' + itemid,
                success: function(data) {
                    $('#EditID').val(data.GoodID);
                    $('#EditTitle').val(data.GoodTitle);                   
                    $('#EditDescription').val(data.GoodDescription);                   
                    $('#EditImgage').val(data.GoodImage);
                    $('#EditImageName').val(data.GoodImage);
                    $('#EditStatus').val(data.GoodImage);                  
                    $('#EditPrice').val(data.GoodPrice);                                  
                    $('#EditCategory').val(data.GoodCategory);                              
                }
            });
        });
        $("#UpdateAjax").click(function() {
            let item_id;
            let good_title;
            let good_description;
            let good_image_url;
            let good_image_name;
            let good_status_id;
            let good_price;
            let good_category;

            item_id = $('#EditID').val();
            good_title = $('#EditTitle').val();
            good_description = $('#EditDescription').val();
            good_image_url = $('#EditImgage').val();
            good_image_name = $('#EditImageName').val();
            good_status_id = $('#EditStatus').val();
            good_price = $('#EditPrice').val();
            good_category = $('#EditCategory').val();
            $.ajax({
                type: 'POST',
                url: '/goods/updateAjax/'+item_id,
                data: {
                    good_title: good_title, 
                    good_description: good_description, 
                    good_image_url: good_image_url,
                    good_image_name: good_image_name, 
                    good_status_id: good_status_id, 
                    good_price: good_price,
                    good_category: good_category, 
                },
                success: function(data) {
                    $("#editSingleItem").hide();
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    $('body').css({overflow:'auto'});
                    location.reload();
                }
            });
        });
})
 </script>
  @endsection




































































































































































































