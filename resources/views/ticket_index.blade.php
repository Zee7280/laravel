@extends('layouts.btemplate')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

@section('content')
                 <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">All Ticket</strong>
                            </div>
                            <div class="card-body">
                                <table id="example" class="table table-striped table-bordered dt-responsive nowrap" >
    								<thead class="thead-light">
    									<tr>
    	                                    <th >Email</th>
    										<th>phone</th>
    										<th>description</th>
    										<th>company</th>
    										<th>Standard PPE</th>
    								
    									</tr>
    							</thead>
        							<tbody>
        									@foreach($ticket as $rec)
        								
        									<tr>
        									 
        									    <td><a href="<?=$rec->email;?>" target="_blank">{{$rec->email}}</a></td>
        										<td>{{$rec->phone}}</td>
        										<td>{{$rec->description}}</td>
        										<td>{{$rec->company}}</td>
                                                <td>{{$rec->protective}}  {{$rec->safety}}  {{$rec->hi}}  {{$rec->ear}}  {{$rec->mask}}  {{$rec->gloves}}  {{$rec->other}}</td>
        									</tr>
        									@endforeach
        							</tbody>
        						</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
@endsection

  