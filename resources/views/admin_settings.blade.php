@extends('item_main')

@section('title', "| Admin-settings ")

@section('content')

<div class = "page-header container col-xs-12 form-group">
    <div class = "form-group col-xs-9">
        <h1>Account Settings</h1>
    </div>
    <div class = "form-group col-xs-3">
        <form method="GET" action="{{ route('user.create') }}" style="display: inline-block;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" value="Create" role="button" class="btn btn-primary ">
        </form>
    </div>
</div>

@if( count($admin_user) )
<div class = "container">
    <div class = "row" id = "app" >
        <div class = "col-md-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Account Settings')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-sm-12">
                            <h2>  Admins: </h2>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Full Name </th>
                                    <th> E-mail </th>
                                    <th> Password </th>
                                    <th> Phone </th>
                                    <th> Address </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($admin_user as $ind => $user)
                                    <tr id="row">
                                        <td> # </td>
                                        <td> {{ $user[$ind]-> name }} </td>
                                        <td> {{ $user[$ind]->email }} </td>
                                        <td> {{ $user[$ind]->temp_pass }} </td>
                                        <td> {{ $user[$ind]->phone }} </td>
                                        <td> {{ $user[$ind]->address }} </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif
@endsection


