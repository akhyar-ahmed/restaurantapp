@extends('main')

@section('title', "| Food-Items ")

@section('content')

    <div class="page-header"><h1>Food Items</h1></div><br> <br>

    <form method="POST" action="{{ route('create') }}">
        <div class="form-group col-xs-4">
            <input type="text" class="form-control" name="name" placeholder="Food Name">
        </div>

        <div class="form-group col-xs-2">
            <input type="text" class="form-control" name="code" placeholder="Menu ID">
        </div>

        <div class="form-group col-xs-2">
            <input type="text" class="form-control" name="stock" placeholder="Available Stock">
        </div>

        <div class="form-group col-xs-2">
            <input type="text" class="form-control" name="base_price" placeholder="Selling Price">
        </div>

        <div class="form-group col-xs-2">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="submit" value="Insert" class="btn btn-primary">
        </div>
    </form>
@if(count($items))
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Food Name</th>
				<th>Code No.</th>
				<th>Stock</th>
				<th>Base Price</th>
				<th>Created at</th>
				<th>Updated at</th>
				<th>Actions</th>
			</tr>
		</thead>

		@foreach($items as $items)
	  	<tr>
	  		<td>
	  			{{ $items->name }}
	  		</td>
	  		<td>
	  			{{ $items->code }}
	  		</td>
	  		<td>
	  			{{ $items->stock }}
	  		</td>
	  		<td>
	  			{{ $items->base_price }}
	  		</td>
	  		<td>
	  			{{ date('M j, Y', strtotime($items->created_at)) }}
	  		</td>
	  		<td>
	  			{{ date('M j, Y', strtotime($items->updated_at)) }}
	  		</td>

	  		<td>
		  		<div>
		              <form method="GET" action="{{ route('get.edit', $items->id) }}" style="display: inline-block;">
		                <input type="hidden" name="_token" value="{{ csrf_token() }}">
		                <input type="submit" value="Update" role="button" class="btn btn-warning btn-xs">
		              </form>
		       
		              <form method="GET" action="{{ route('delete', $items->id)}}" style="display: inline-block;">
		                <input type="hidden" name="_token" value="{{ csrf_token() }}">
		                <input type="submit" value="Delete" role="button" class="btn btn-danger btn-xs">
		              </form>
		        </div>
	        </td>
	  	</tr>
	  	@endforeach
	</table>
@endif

@endsection