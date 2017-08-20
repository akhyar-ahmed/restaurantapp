@extends('main')

@section('title', "| Food-Orders ")

@section('content')
    <div class = "page-header container col-xs-12 form-group">
		<h1 style="text-align:left; display:inline">Preview</h1>
	</div>

	@if(count($orderItem))
	<div class = " container col-xs-12 form-group">
		<h2 style="text-align:center; display:inline: float:center"><u>Order Draft</u></h2>
	</div>
	<div class = "container form-group col-xs-12">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>SL</th>
					<th>Food Name</th>
					<th>Quantity</th>
					<th>Base Price</th>
					<th>Total</th>
				</tr>
			</thead>

			@foreach($orderItem as $or)

			<tr>
				<td>
					# 
				</td>

				<td>
					{{ $or->food_name }}
				</td>

				<td>
					{{ $or->quantity }}
				</td>

				<td>
					£ {{ $or->base_price }}
				</td>

				<td>
					£ {{ $or->total }}
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	<div class="container form-group col-xs-12 ">
		<form method="POST" action="{{ route('confirm-order') }}">
			<div class = "form-group col-xs-2">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" name="submit" value="Confirm" class="btn btn-success btn-md">
			</div>	
			<div class = "form-group col-xs-1"> 
				<a  href = "{{ route('order-clear') }}" class="btn btn-danger btn-md" role = "button">Cancel</a>
            </div>

		</form>
	</div>
    @else
        <div class="container form-group">
        <br>
            <h3 style="text-align:center;">No Order Place Yet </h3>
        </div>
@endif
<br><br>
@endsection

@push('scripts')

@endpush

