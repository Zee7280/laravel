@extends('layouts.btemplate')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

@section('content')

<div class="row justify-content-center">
		<div class="col-xl-12 col-lg-12 col-md-12">
			<div class="row">
				<div class="col-lg-12 mb-4">
					<!-- Simple Tables -->
					<div class="card">
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h2 class="m-0 font-weight-bold text-primary">Supplier List</h2>
							<!-- <input type="text" placeholder="Search By Name" id="searchTerm" class="form-control" style="width: 300px;margin-right: -400px;"> -->
							<a href="store-supplier" class="btn btn-primary float-right" style="margin-top: 6px;margin-right: 6px;">Add Supplier</a>
						</div>
						<div class="table-responsive" style="padding: 10px;width: 99%;">
							<table class="table table-striped table-bordered dt-responsive nowrap" id="example"  >
								<thead class="thead-light">
									<tr>
	                                    <th >Action</th>
										<th>Name</th>
										<th>Website</th>

									</tr>
								</thead>
								<tbody>
									@foreach($supplier as $rec)
								
									<tr>
									 
									    <td>
										 <!--<a href="edit-user/<?=$rec->id;?>" class="btn btn-sm btn-warning">Edit</a>-->
										<a onclick="Deleteuser(<?=$rec->id;?>)" class="btn btn-sm btn-danger" style="color: white">Delete</a>
										</td>
										<td>{{$rec->name}}</td>
										<td><a href="<?=$rec->website;?>" target="_blank">{{$rec->website}}</a></td>

									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<div class="card-footer">
						<div id="saved_msg" ><span></span></div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    
<script>
$(document).ready(function() {
    $('#example').DataTable({
        
         "scrollX": false,
         "autoWidth": false,
    }  );
} );

function dElete(id){
    $('#deleID').val(id);
    $('#pincode').val(' ');
    $('#saved_msg1').hide();
    $('#deletemodal').modal('show');

    
}  
function Deleteuser(id){
    

   // var id =$('#deleID').val();
	var fd = new FormData();
	$.ajax({
	type:'get',      
	url:'<?=url('api/delete-supplier');?>/'+id,                
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
			},2000);
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

@endsection