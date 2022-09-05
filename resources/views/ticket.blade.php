@extends('layouts.btemplate')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@section('content')

<div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow-sm ">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg-12">
              <a
                href="all-ticket"
                class="btn btn-primary float-right"
                style="margin-top: 6px; margin-right: 6px"
                >All Tickets</a
              >
              <div class="login-form">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Add Ticket</h1>
                </div>
                <form enctype="multipart/form-data" method="post" name="user_form"  id="user_form">
                    @csrf
                  <div class="form-group">
                <div class="form-row">
                     <div class="col-md-6">
                        <label for="exampleFormControlSelect2">Description</label>
                        <input type="text" class="form-control" id="exampleInputFirstName" name="description"    />
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlSelect2">Company Name</label>
                        <input type="text" class="form-control" id="exampleInputFirstName" name="company"    />
                    </div>
                </div>
                <div class="form-row">
                     <div class="col-md-6">
                        <label for="exampleFormControlSelect2">Email</label>
                        <input type="email" class="form-control" id="exampleInputFirstName" name="email"    />
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlSelect2">Phone</label>
                        <input type="number" class="form-control" id="exampleInputFirstName" name="phone"    />
                    </div>
                </div>
                    <div class="pp-input-wrap pp-input-md"><b class="pp-label-text">I need help with</b>
                    <div class="markdown"><p>Standard PPE:</p></div><div class="pp-checkbox">
                        <input name="customFields.vertical_checklist" id="vertical_checklist_Hardhat" tabindex="0" type="checkbox" value="Hardhat">
                        <label for="vertical_checklist_Hardhat" title="">Hardhat</label>
                        </div><div class="pp-checkbox"><input name="protective" id="vertical_checklist_Protective Eyewear" tabindex="0" type="checkbox" value="Protective Eyewear"><label for="vertical_checklist_Protective Eyewear" title="">Protective Eyewear</label>
                        </div><div class="pp-checkbox"><input name="safety" id="vertical_checklist_Safety Boots" tabindex="0" type="checkbox" value="Safety Boots"><label for="vertical_checklist_Safety Boots" title="">Safety Boots</label>
                        </div><div class="pp-checkbox"><input name="hi" id="vertical_checklist_Hi Vis Clothing" tabindex="0" type="checkbox" value="Hi Vis Clothing"><label for="vertical_checklist_Hi Vis Clothing" title="">Hi Vis Clothing</label>
                        </div><div class="pp-checkbox"><input name="ear" id="vertical_checklist_Ear Protection" tabindex="0" type="checkbox" value="Ear Protection"><label for="vertical_checklist_Ear Protection" title="">Ear Protection</label>
                        </div><div class="pp-checkbox"><input name="mask" id="vertical_checklist_Protective Mask" tabindex="0" type="checkbox" value="Protective Mask"><label for="vertical_checklist_Protective Mask" title="">Protective Mask</label>
                        </div><div class="pp-checkbox"><input name="gloves" id="vertical_checklist_Gloves" tabindex="0" type="checkbox" value="Gloves"><label for="vertical_checklist_Gloves" title="">Gloves</label>
                        </div><div class="pp-checkbox"><input name="other" id="vertical_checklist_Other" tabindex="0" type="checkbox" value="Other">
                        <label for="vertical_checklist_Other" title="">Other</label></div></div>
                    </br>
                    <div class="form-group">
                    <div id="saved_msg" ><span></span></div>

                        <button type="button" onclick="Insertcategory()" class="btn btn-primary btn-block">
                        Submit
                        </button>
                  </div>
                </form>
                <div class="text-center"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>






<script>

function Insertcategory(){

            var bi_form = document.querySelector('#user_form');
            var fd = new FormData(bi_form);
  $.ajax({
            type:'post',      
            url:'<?=url('api/insert-ticket');?>',                
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            data:fd,
            processData:false,
            contentType:false,               
            success:function(res){
                if(res.status){
                    $('#saved_msg').html('<p style="color:green;">'+res.message+'.</p>');
                    $('#user_form')[0].reset();

                }else{
                    $('#saved_msg').html('<p style="color:#EA4335;">'+res.message+'.</p>');

                }

           setTimeout(function(){
            $('#saved_msg').html(' ');
                     },8000);
            },
            error:function(jqXHR, exception){
                var html='';
                console.log(jqXHR.responseJSON.errors);
                $.each( jqXHR.responseJSON.errors, function( key, value ) {
               html+= '<p style="color:#EA4335;">'+value+'</p>';
                });
                
            $('#saved_msg').html(html);

                },
           
        });
}




</script>
@endsection