@extends('item_main')

@section('title', "| Cutomers ")

@section('content')

    <div class = "page-header container col-xs-12 form-group">
		<div class = "form-group col-xs-7">
			<h1>Customers</h1>
		</div>
		<div class = "form-group col-xs-5">
			<br>
			@include('_customerSearching')
		</div>
	</div>
	<div id="result" class = "container form-group col-xs-12"></div>
	<br>
    <form method="POST" action="{{ route('customer.create') }}">
        <div class="form-group col-xs-3">
			<hr>
            <input type="text" class="form-control" name="name" placeholder="Full Name">
        </div>

        <div class="form-group col-xs-3">
			<hr>
            <input type="text" class="form-control" name="caller_id" placeholder="Caller ID">
        </div>

        <div class="form-group col-xs-4">
			<hr>
            <input type="text" class="form-control" name="address" placeholder="Address">
        </div>

        <div class="form-group col-xs-2">
			<hr>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" name="submit" value="Insert" class="btn btn-primary">

        </div>
    </form>

@if(count($customers))
<div class = "container form-group col-xs-12">
	<h3><u>Customers:</u></h3>
	<table class="table table-bordered table-hover">
	
		<thead>
			<tr>
				<th>SL</th>
				<th>Full Name</th>
				<th>Caller ID</th>
				<th>Address</th>
				<th>Created at</th>
				<th>Updated at</th>
				<th>Actions</th>
			</tr>
		</thead>

		@foreach($customers as $items)
	  	<tr>
			<td>
			  {{ $items->id }}
			</td>

	  		<td>
	  			{{ $items->name }}
	  		</td>
	  		<td>
	  			{{ $items->phone }}
	  		</td>
	  		<td>
	  			{{ $items->address }}
	  		</td>
	  		<td>
	  			{{ date('M j, Y', strtotime($items->created_at)) }}
	  		</td>
	  		<td>
	  			{{ date('M j, Y', strtotime($items->updated_at)) }}
	  		</td>

	  		<td>
		  		<div>
		              <form method="GET" action="#" style="display: inline-block;">
		                <input type="hidden" name="_token" value="{{ csrf_token() }}">
		                <input type="submit" value="Update" role="button" class="btn btn-warning btn-xs">
		              </form>
		       
		              <form method="GET" action="#" style="display: inline-block;">
		                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
		$('#search_text').keyup(function(){
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
		$('#search_text').keydown(function(){
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

