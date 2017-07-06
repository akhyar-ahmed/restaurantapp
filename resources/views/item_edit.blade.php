@extends('main')

@section('title', "| Food-Item-Edit ")

@section('content')
    <div class="page-header"><h1>Edit Food Item</h1></div><br> <br>
    <table class="table table-hover">
        <tr id="edit">
            <form method="POST" action="{{ route('post.edit', $item->id) }}">
                <td class="col-xs-9">
                    <div class="form-group col-xs-5">
                        <input type="text" class="form-control" name="name" value="{{ $item->name }}" required="true">
                    </div>
                    <div class="form-group col-xs-3">
                        <input type="text" class="form-control" name="code" value="{{ $item->code }}" required="true">
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="text" class="form-control" name="stock" value="{{ $item->stock }}" required="true">
                    </div>
                    <div class="form-group col-xs-2">
                        <input type="text" class="form-control" name="base_price" value="{{ $item->base_price }}" required="true">
                    </div>
                </td>
                <td class="form-group col-xs-3">
                    <div class="col-xs-6">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" name="submit" value="Update" class="btn btn-success btn-md col-xs-12">
                    </div>
                    <div class="col-xs-6">
                        <a href="{{ route('item') }}" class="btn btn-warning btn-md col-xs-12" role="button">Cancel</a>
                    </div>
                </td>
            </form>
        </tr>
    </table>
<br> <br> <br>
@endsection