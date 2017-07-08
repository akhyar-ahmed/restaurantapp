@extends('main')

@section('title', "| Customer-Edit ")

@section('content')
    <div class="page-header"><h1>Edit Customer</h1></div><br> <br>
    <table class="table table-hover">
        <tr id="edit">
            <form method="POST" action="{{ route('post.update', $customer->id) }}">
                <td class="col-xs-9">
                    <div class="form-group col-xs-4">
                        <input type="text" class="form-control" name="name" value="{{ $customer->name }}" >
                    </div>
                    <div class="form-group col-xs-3">
                        <input type="text" class="form-control" name="caller_id" value="{{ $customer->phone }}" >
                    </div>
                    <div class="form-group col-xs-5">
                        <input type="text" class="form-control" name="address" value="{{ $customer->address }}" >
                    </div>
                </td>
                <td class="form-group col-xs-3">
                    <div class="col-xs-6">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" name="submit" value="Update" class="btn btn-success btn-md col-xs-12">
                    </div>
                    <div class="col-xs-6">
                        <a href="{{ route('customer') }}" class="btn btn-warning btn-md col-xs-12" role="button">Cancel</a>
                    </div>
                </td>
            </form>
        </tr>
    </table>
<br> <br> <br>
@endsection