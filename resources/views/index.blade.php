@extends('layouts.btemplate')


@section('content')


					<!-- Simple Tables -->
					<div class="card">
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h2 class="m-0 font-weight-bold text-primary">User List</h2>
							<!-- <input type="text" placeholder="Search By Name" id="searchTerm" class="form-control" style="width: 300px;margin-right: -400px;"> -->
							<!--<a href="store-user" class="btn btn-primary float-right" style="margin-top: 6px;margin-right: 6px;">Add User</a>-->
						</div>
						<div class="table-responsive" style="padding: 10px;width: 99%;">
							<table  id="bootstrap-data-table-export" class="table table-striped table-bordered" >
								<thead class="thead-light">
									<tr>
	                                    <th>Action</th>
										<th>Name</th>
										<th>Email</th>
										<th>Type</th>

									</tr>
								</thead>
								<tbody>
									@foreach($user as $rec)
								
									<tr>
									 
									    <td>
										 <a href="edit-user/<?=$rec->id;?>" class="btn btn-sm btn-warning">Edit</a>
										<a onclick="dElete(<?=$rec->id;?>)" class="btn btn-sm btn-danger" style="color: white">Delete</a>
										</td>
										<td>{{$rec->name}}</td>
										<td>{{$rec->email}}</td>
										<td>{{$rec->type}}</td>

									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<div class="card-footer">
						<div id="saved_msg" ><span></span></div>

						</div>
					</div>
	
    @endsection
	@section('javascript')

<script>

function dElete(id){
    
 
	$('#msg').html('<p>Please Weight Processing...</p>');

	var fd = new FormData();
	$.ajax({
	type:'get',      
	url:'<?=url('api/delete-user');?>/'+id,                
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	},
	data:fd,
	processData:false,
	contentType:false,               
	success:function(res){
		if(res.status){
		    $('#msg').html('<p style="color:green;">Delete Successfully...</p>');
			$('#saved_msg').html('<p style="color:green;">'+res.message+'.</p>');
		}else{
			$('#saved_msg').html('<p style="color:#EA4335;">'+res.message+'.</p>');

		}

	setTimeout(function(){
	$('#saved_msg').html(' ');
	location.reload();
			},4000);
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
@stop