@extends('layouts.btemplate')

@section('content')

<div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow-sm ">
        <div class="card-body p-0">
          <div class="row">
            <div class="col-lg-12">
              <a
                href="../user"
                class="btn btn-primary float-right"
                style="margin-top: 6px; margin-right: 6px"
                >All Users</a
              >
              <div class="login-form">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Edit Users</h1>
                </div>
                <form enctype="multipart/form-data" method="post" name="user_form"  id="user_form">
                    @csrf
                  <div class="form-group">
                    <div class="form-row">
                    <input type="hidden" class="form-control" id="exampleInputFirstName" name="id" value="{{$user->id}}"   />

                    <div class="col-md-6">
                        <label for="exampleFormControlSelect2"> Name</label>
                        <input type="text" class="form-control" id="exampleInputFirstName" name="name" value="{{$user->name}}"   />
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlSelect2">Email</label>
                        <input type="text" class="form-control" id="exampleInputFirstName" name="email" value="{{$user->email}}"  />
                    </div>
                </div>
                

                    </br>
                    <div class="form-group">
                    <div id="saved_msg" ><span></span></div>

                        <button type="button" onclick="updateuser()" class="btn btn-primary btn-block">
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

function updateuser(){

            var bi_form = document.querySelector('#user_form');
            var fd = new FormData(bi_form);
  $.ajax({
            type:'post',      
            url:'<?=url('api/update-user');?>',                
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
