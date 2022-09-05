@extends('layouts.btemplate')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

@section('content')
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Product Listing</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered" >
    								<thead class="thead-light">
    									<tr>
    									   
    	                                    <th>Product Link</th>
    										<th>Category</th>
    										<th>Product Image</th>
    										<th>Manufacturer</th>
    										<th>Product Description</th>
    										<th>Model</th>
    										<!--<th>Description</th>-->
                                            <th>item</th>
    									</tr>
    								</thead>
        								<tbody>
        									@foreach($product as $rec)
        									<tr>
        									  
        									    <td><a href="<?=$rec->link;?>" target="_blank">Product Link</a></td>
        										<td>{{$rec->category_name}}</td>
        										<td><img src="<?=$rec->image;?>" width="60px"></td>
        										 <td>{{$rec->brand}}</td>
        										 <td>{{$rec->name}}</td>
        										 <td>{{$rec->model}}</td>
        										<!--<td>{{$rec->description}}</td>-->
        										<td>{{$rec->item}}</td>
        									</tr>
        									@endforeach
        								</tbody>
        						</table>
                            </div>
                        </div>
                    </div>
                </div>
       
   @endsection