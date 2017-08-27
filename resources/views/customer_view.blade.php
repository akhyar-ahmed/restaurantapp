@extends('item_main')

@section('title', "| Cutomers ")

@section('content')

    <div class = "page-header container row-xs-12 form-group">
		<div class = "form-group col-xs-10">
			<h1>Customer</h1>
		</div>
		<div class = "form-group col-xs-2">
			<br>
			<a href= "{{ route('get-customer-create') }}" class = "btn btn-lg btn-primary" role= "button">Create</a>
		</div>
	</div>
	<div class="container row-xs-12 form-group">
		<div class="from-group"><br>@include('_customerSearching')</div>
	</div>
	<div id="result" class = "container form-group col-xs-12"></div>
	<br>
@if(count($customers))
<div class = "container form-group col-xs-12">
	<h3><u>Customers:</u></h3>
	<table class="container table table-bordered table-hover">
	
		<thead>
			<tr>
				<th>SL</th>
				<th>Name</th>
				<th>Celler ID</th>
				<th>Addresses </th>
				<th>Zip</th>
				<th>Created</th>
				<th>Actions</th>
			</tr>
		</thead>

		@foreach($customers as $items)
	  	<tr>
			<td>
			  {{ $items->id }}
			</td>

	  		<td>
	  			{{ $items->first_name." ".$items->last_name }}
	  		</td>
	  		<td>
	  			{{ $items->phone }}
	  		</td>
	  		<td>
	  			{{ "1. ". $items->address_one }}<br>{{"2. ". $items->address_two}}
	  		</td>
			<td>
				{{ $items->zip }}
			</td>
	  		<td>
	  			{{ date('M j, Y', strtotime($items->created_at)) }}
	  		</td>
	  		<td>
		  		<div>
		              <form method="GET" action="{{ route('get.edit', $items->id ) }}" style="display: inline-block;">
		                
		                <input type="submit" value="Update" role="button" class="btn btn-warning btn-xs">
		              </form>

		              <form method="GET" action="{{ route('get.delete', $items->id ) }}" style="display: inline-block;">
		               
		                <input type="submit" value="Delete" role="button" class="btn btn-danger btn-xs">
		              </form>
		        </div>
	        </td>
	  	</tr>
	  	@endforeach
	</table>
</div>
@endif
@endsection

@push('scripts')
<script>
	$(document).ready(function(){
		$('#search_customer_text').keyup(function(){
			var txt = $(this).val();
			//alert(txt);
			if( txt != '') {
				$.ajaxSetup({
        		headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: "/customer/search",
					method: "POST",
					data: {
						search:txt
						},
					dataType: "text",
					success: function(data){
						//console.log(data);
						$('#result').html(data);
					}
				});

			}
			else {
				$('#result').html('');

				$.ajaxSetup({
        		headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: "/customer/search",
					method: "POST",
					data: {
						search:txt
						},
					dataType: "text",
					success: function(data){
						$('#result').html(data);
					}
				});
			}
		});
		$('#search_customer_text').keydown(function(){
			var txt = $(this).val();
			if( txt != '') {
				$.ajaxSetup({
        		headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: "/customer/search",
					method: "POST",
					data: {
						search:txt
						},
					dataType: "text",
					success: function(data){
						$('#result').html(data);
					}
				});

			}
			else {
				$('#result').html('');
				
				$.ajaxSetup({
        		headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.ajax({
					url: "/customer/search",
					method: "POST",
					data: {
						search:txt
						},
					dataType: "text",
					success: function(data){
						$('#result').html(data);
					}
				});
			}
		});
	});
</script>
@endpush

