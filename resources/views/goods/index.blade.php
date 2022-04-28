
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
    <div class="infobox showitem" data-bs-toggle="modal" data-bs-target="#viewSingleItem" data-goodid= "{{$good->id}}"
        style="background-image: url({{ asset('/images/placeholder.png')}})" 
        alt="{{$good->image_name}}">

        <div class="title">{{$good->title}}</div>
        <div class="price">{{$good->price}} €</div>
    </div>
    @endforeach
</div>

<div class="modal fade" id="viewSingleItem" tabindex="-1" aria-labelledby="viewSingleItem" aria-hidden="true">
    <div class="modal-dialog"style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;" > 
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><div class="viewgoodtitle"></div></h5>
            </div>
            <div class="modal-body">
                <div class="viewgoodimage_url" style="background-image: url({{ asset('/images/placeholder.png')}})"></div>
                <div class="viewgoodprice position-absolute top-0 end-0">  €</div> 
                <div class="viewgoodcategory"></div>
                <div class="viewgooddescription"></div>
            </div> 
            <div class="modal-footer">
                <button class="btn btn-secondary editgoods" data-bs-toggle="modal" data-bs-target="#editSingleItem" data-goodid="">Edit</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="createNewItem" tabindex="-1" aria-labelledby="viewSingleItem" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Item</h5>
            </div>
            <div class="modal-body">
                <div class="conteiner">    
                    <input id="Title" class="form-control" type='text' name="good_title" placeholder="Name"/>
                    <input id="Description" class="form-control" type='text' name="good_description" placeholder="Description"/>
                    <input id="Imgage"  class="form-control" type='text' name="good_image_url" placeholder="Imgage"/>
                    <input id="ImageName" class="form-control" type='text' name="good_image_name" placeholder="Image name"/>
                    <input id="Status" class="form-control" type='text' name="good_status_id" placeholder="Status"/>
                    <input id="Price"  class="form-control" type='text' name="good_price" placeholder="Price"/>
                    <input id="Category"  class="form-control" type='text' name="good_category" placeholder="Category"/>@csrf 
                    <button id="AddAjax" class="btn btn-primary">Add</button>
                </div>
            </div> 
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editSingleItem" tabindex="-1" aria-labelledby="viewSingleItem" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Item Info</h5>
            </div>
            <div class="modal-body">
            </div> 
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>



</div>


<script>
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
        }
    });
//CREATE NEW ITEM
$(document).ready(function() {
        $("#AddAjax").click(function() {
            let good_title;
            let good_description;
            let good_image_url;
            let good_image_name;
            let good_status_id;
            let good_price;
            let good_category;

            good_title = $('#Title').val();
            good_description = $('#Description').val();
            good_image_url = $('#Imgage').val();
            good_image_name = $('#ImageName').val();
            good_status_id = $('#Status').val();
            good_price = $('#Price').val();
            good_category = $('#Category').val();           
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
                },
                success: function(data) { //closes modal upon success
                    $("#createNewItem").hide();
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    $('body').css({overflow:'auto'});

                }
            });
        });
//DELETE
//SHOW
        $(document).on('click', '.showitem', function() {
            let itemid;
            itemid = $(this).attr('data-goodid');
            $.ajax({
                type: 'GET',
                url: '/goods/showAjax/' + itemid,
                success: function(data) {
                   $('.viewgoodtitle').html(data.GoodTitle);                   
                   $('.viewgooddescription').html(data.GoodDescription);                   
                   $('.viewgoodimage_url').html(data.GoodImage);                   
                   $('.viewgoodprice').html(data.GoodPrice);                                  
                   $('.viewgoodcategory').html(data.GoodCategory);                                  
                }
            });
        });
})
 </script>
  @endsection




































































































































































































