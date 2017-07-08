@extends('main')

@section('title', "| Order-Item-Update ")

@section('content')
    <div class="page-header"><h1>Update Order Item</h1></div><br> <br>
    <table class="table table-hover">
        <tr id="edit">
            <form method="POST" action="{{ route('online.newsaleItem.update', $orderItem->id) }}">
                <td class="col-xs-9">
                    <div class="form-group col-xs-8">
                        <input type="text" class="form-control" name="food_name" value="{{ $orderItem->food_name }}" disabled>
                    </div>
                    <div class="form-group col-xs-4">
                        <input type="text" class="form-control" name="quantity" value="{{ $orderItem->quantity }}">
                    </div>
                </td>
                <td class="form-group col-xs-3">
                    <div class="col-xs-6">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" name="submit" value="Update" class="btn btn-success btn-md col-xs-12">
                    </div>
                    <div class="col-xs-6">
                        <a href="{{ route('online.order') }}" class="btn btn-warning btn-md col-xs-12" role="button">Cancel</a>
                    </div>
                </td>
            </form>
        </tr>
    </table>
<br> <br> <br>
@endsection