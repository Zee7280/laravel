@extends('layouts.btemplate')


@section('content')

             
<style type="text/css">
              .outline{
     box-shadow: 2px 2px 2px red;
     }
    
</style>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                    <strong>
                        Well done!
                    </strong>
                    {{Session::get('message')}}.
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                    <strong>
                        Oh snap!
                    </strong>
                    {{Session::get('error')}}.
                </div>


            @endif
            

    <div class="card">
        <div class="card-header">
            <h5>Data Import Panel</h5>
  			<!-- <a href="/export-contact" class="btn btn-primary " style="background-color: indianred;">Contact Export Excel</a>
  			<a href="/export-company" class="btn btn-warning " style="">Company Export Excel</a>
  			<a href="/export-product" class="btn btn-info " style="">Product Export Excel</a> -->


        </div>
        <br>
        <div class="card-block">
            <div class="dt-responsive table-responsive">
                <form method="post" action="store-dynamic-data" id="personal_form" enctype="multipart/form-data">
                      {{ csrf_field() }}
                    <div class="form-group col-md-12">
                        
                        <label for="inputEmail4">Select Category</label> <small style="font-size:12px; color:#F00;"> </small>
                        <select name="category" class="form-control" id="category"   required="required">
                              <option value="">--None-- </option>
                             @foreach($category as $rec)
                            <option value="{{$rec->category_name}}">{{$rec->category_name}} </option>
                             @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        
                        <label for="inputEmail4">Select Supplier</label> <small style="font-size:12px; color:#F00;"></small>
                        <select name="supplier" class="form-control" id="supplier"   required="required">
                              <option value="">--None-- </option>
                             @foreach($supplier as $rec)
                            <option value="{{$rec->name}}">{{$rec->name}} </option>
                             @endforeach
                        </select>
                    </div>
                 <hr>
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Upload your File <small style="font-size:12px; color:#F00;">(Only xlsx Type is allowed) </small></label>
                         <a href=<?=asset('public/demo.xlsx');?>> Demo File</a> 
                        <input type="file" class="form-control" name="uploadfile" id="uploadfile" accept=".xlsx"  value="">
                       
                </div>
 
                <div id="error" ></div>
                  <div align="center">
                        <button type="submit"  class="btn btn-info">Save </button>
                </div>

            </form>

        </div>

    </div>
</div>



@endsection


<script>

function InsertCon(){

            var bi_form = document.querySelector('#contact_form');
            var fd = new FormData(bi_form);
  $.ajax({
            type:'post',      
            url:'<?=url('api/insert-contact');?>',                
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            data:fd,
            processData:false,
            contentType:false,               
            success:function(res){
                if(res.status){
                    $('#saved_msg').html('<p style="color:green;">'+res.message+'.</p>');

                }else{
                    $('#saved_msg').html('<p style="color:#EA4335;">'+res.message+'.</p>');

                }

           setTimeout(function(){
            $('#saved_msg').html(' ');
                     },8000);
            },
            error:function(jqXHR, exception){
                console.log(jqXHR.responseText.message);
                // $.each( jqXHR.responseText.errors, function( key, value ) {
                // $('#saved_msg').html('<p style="color:#EA4335;">'+value.message+'</p>');
                // });
                   
                },
           
        });
}




</script>