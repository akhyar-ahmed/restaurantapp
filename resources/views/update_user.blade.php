@extends('item_main')

@section('title', "| Update-User")
 
@section('content')
<div class="form-group continer">
    <div class = "page-header container col-xs-12 ">
		<div class = "form-group col-xs-10">
			<h1>Update User</h1>
		</div>
		<div class = "form-group col-xs-2">
            <br>
			<a href= "{{ route('get.user') }}" class = "btn btn-lg btn-warning" role= "button">Back</a>
		</div>
    </div>

    <form method="POST" class="form-group col-xs-12" action="{{ route('user.update.post',$user->id)  }}">
        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4">
                <h4>Name:</h4>
            </label>
            <div class="col-xs-8">
                <input type="name" class="form-control" name="name" value = "{{ $user->name }}" >
            </div>
        </div>

        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4">
                <h4>E-mail:</h4>
            </label>
            <div class="col-xs-8">
                <input type="email" class="form-control" name="email" value = "{{ $user->email }}" >
            </div>
        </div>

        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4" >
                <h4>Password:</h4>
            </label>
            <div class="col-xs-8">
                <input type="text" class="form-control" name="password" value = "{{ $user->temp_pass }}" >
            </div>
        </div>

        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4" >
                <h4>Address:</h4>
            </label>
            <div class="col-xs-8">
                <input type="text" class="form-control" name="address" value=" {{ $user->address }}" >
            </div>
        </div>
        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4" >
                <h4>Phone:</h4>
            </label>
            <div class="col-xs-8">
                <input type="text" class="form-control" name="phone" value = "{{ $user->phone }}" >
            </div>
        </div>
        <div class="form-group col-xs-12">
            <label class="control-label col-xs-4">
                <h4>User Category:</h4>
            </label>
            <div class="col-xs-8">
                <select class="form-control" name="type">
					<option disabled selected value> Select User Category </option>
					
						<option name="type" value="User">User</option>
						<option name="type" value="Admin">Admin</option>
                </select>
            </div>
        </div>
        
        <div class="form-group col-xs-12"> 
        <br>       
            <div class="col-xs-offset-6 col-xs-12">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" role="botton" value="Submit" class="btn btn-success btn-lg" >
            </div>
        </div>
    </form>

  </div>
  <br><br>
  @endsection