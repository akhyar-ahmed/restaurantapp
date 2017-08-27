@extends('item_main')

@section('title', "| Create-Customer")
 
@section('content')
<div class="form-group continer">
    <div class = "page-header container col-xs-12 ">
		<div class = "form-group col-xs-10">
			<h1>Customer Create</h1>
		</div>
		<div class = "form-group col-xs-2">
            <br>
			<a href= "{{ route('customer') }}" class = "btn btn-lg btn-warning" role= "button">Back</a>
		</div>
    </div>

    <form method="POST" class="form-group col-xs-12" action="{{ route('customer.create')  }}">
        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4">
                <h4>First Name:</h4>
            </label>
            <div class="col-xs-8">
                <input type="first_name" class="form-control" name="first_name" placeholder="Enter First Name" >
            </div>
        </div>

        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4">
                <h4>Last Name:</h4>
            </label>
            <div class="col-xs-8">
                <input type="last_name" class="form-control" name="last_name" placeholder="Enter Last Name" >
            </div>
        </div>

        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4" >
                <h4>Caller ID:</h4>
            </label>
            <div class="col-xs-8">
                <input type="caller_id" class="form-control" name="caller_id" placeholder="Enter Caller ID" >
            </div>
        </div>

        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4" >
                <h4>Address Line 1:</h4>
            </label>
            <div class="col-xs-8">
                <input type="add_one" class="form-control" name="address_one" placeholder="Enter Address 1" >
            </div>
        </div>
        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4" >
                <h4>Address Line 2:</h4>
            </label>
            <div class="col-xs-8">
                <input type="add_two" class="form-control" name="address_two" placeholder="Enter Address 2" >
            </div>
        </div>
        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4">
                <h4>ZIP Code:</h4>
            </label>
            <div class="col-xs-8">
                <input type="zip" class="form-control" name="zip" placeholder="Enter ZIP Code" >
            </div>
        </div>
        
        <div class="form-group col-xs-12"> 
        <br>       
            <div class="col-xs-offset-5 col-xs-12">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" role="botton" value="Submit" class="btn btn-success btn-lg" >
            </div>
        </div>
    </form>

  </div>
  <br><br>
  @endsection