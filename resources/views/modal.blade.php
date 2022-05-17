<!--CREATE--> 
<div class="modal fade" id="createNewItem" tabindex="-1" aria-labelledby="viewSingleItem" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create New Item</h5>
                </div>
                <div class="modal-body">
                    <div class="conteiner">    
                        <input id="Title" class="form-control" type='text' name="good_title" placeholder="Name of the new thing"/>
                        <input id="Description" class="form-control" type='textarea' name="good_description" placeholder="Description of the new thing"/>
                        <input id="Imgage"  class="form-control" type='text' name="good_image_url" placeholder="Imgage url"/>
                        <input id="ImageName" class="form-control" type='text' name="good_image_name" placeholder="Image title"/>
                        <input id="Status" class="form-control" type='text' name="good_status_id" placeholder="Status"/>
                        <input id="Price"  class="form-control" type='text' name="good_price" placeholder="Price"/>
                        <input id="Category"  class="form-control" type='text' name="good_category" placeholder="category"/>                  
                        <select id="Category_id" class="form-select create-input">
                        @foreach ($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->CategoryName}}</option>
                        @endforeach
                        </select> 
                    </div>
                </div>   
                <div class="modal-footer">
                    <button id="AddAjax" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>
<!--VIEW-->
    <div class="modal fade" id="viewSingleItem" tabindex="-1" aria-labelledby="viewSingleItem" aria-hidden="true">
        <div class="modal-dialog"style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;" > 
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><div class="ViewTitle"></div></h5>
                </div>
                <div class="modal-body">
                    <div class="ViewImage_url" style="background-image: url({{ asset('/images/placeholder.png')}})"></div>
                    <div class="ViewPrice position-absolute top-0 end-0">  €</div>
                    <div class="insidemodal"><br>
                        <p class ="modalsubheader">Description:</p> 
                        <div class="ViewDescription"></div>
                    </div> 
                   <div class="ViewCategory"></div>
                </div> 
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
<!--EDIT-->
    <div class="modal fade" id="editSingleItem" tabindex="-1" aria-labelledby="viewSingleItem" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Item</h5>
                </div>
                <div class="modal-body">
                <div class="conteiner">
                        <input type="hidden" id="EditID" name="good_id" />     
                        <input id="EditTitle" class="form-control" type='text' name="good_title" placeholder=""/>
                        <input id="EditDescription" class="form-control" type='textarea' name="good_description" placeholder=""/>
                        <input id="EditImgage"  class="form-control" type='text' name="good_image_url"  placeholder=""/>
                        <input id="EditImageName" class="form-control" type='text' name="good_image_name"  placeholder=""/>
                        <input id="EditStatus" class="form-control" type='text' name="good_status_id"  placeholder=""/>
                        <input id="EditPrice"  class="form-control" type='text' name="good_price"  placeholder=""/>
                        <select id="EditCategory" class="form-select create-input">
                            @foreach ($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->CategoryName}}</option>
                            @endforeach
                        </select> 
                    </div>
                </div> 
                <div class="modal-footer">
                <button id="UpdateAjax" class="btn btn-secondary">Update</button>
                </div>
            </div>
        </div>
    </div>