
@extends('layouts.app')
@section('content')
<div id="alert" class="alert alert-success"></div>
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

<script>
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
        }
    });
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
                    success: function(data) {
                        $("#alert").html(data);
                    }
                });
        });
    })






 </script>
@endsection