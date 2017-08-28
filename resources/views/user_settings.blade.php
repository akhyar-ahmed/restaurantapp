@extends('usermain')

@section('title', "| Admin-settings ")

@section('content')
@if( count($admin_user)>0 )
<div class = "  page-header col-xs-12">
    <div class = " col-xs-10">
        <h1>Account Settings</h1>
    </div>
    
    <div class = " col-xs-2">
        <br>
        <form method="GET" action="{{ route('user.create') }}" style="display: inline-block;">
            <input type="submit" value="Create" role="button" class="btn btn-success btn-lg" >
        </form>
    </div>
</div>

<div class = "container">
    @if(count($admin_user)>0)
    <div class = "row" >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Account Settings')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">

                            <h2> <u> Admins: </u></h2>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th> SL </th>
                                    <th> Name </th>
                                    <th> E-mail </th>
                                    <th> Password </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($admin_user as $ind => $admin)
                                @if($admin->sup_admin == 1)
                                @continue
                                @endif
                                    <tr id="row">
                                        <td> {{ $ind+1 }} </td>
                                        <td> {{ $admin-> name }} </td>
                                        <td> {{ $admin->email }} </td>
                                        <td> {{ $admin->temp_pass }} </td>
                                        @if($user->sup_admin == 1)
                                        <td>
                                            <a href="{{ route('user.update', $admin->id) }}" class="btn btn-warning btn-xs"> Update </a>
                                            <a href="{{ route('user.delete', $admin->id) }}" class="btn btn-danger btn-xs"> Delete </a>
                                        </td>
                                        @else
                                        <td>
                                            <a href="{{ route('user.update', $admin->id) }}" class="btn btn-warning btn-xs"> Update </a>
                                        </td>
                                        @endif
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
    @else
    <div class = "row" >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Account Settings')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">
                            <h2> No Admin User !! </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(count($guest_user)>0)
    <div class = "row" >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Account Settings')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">

                            <h2> <u> Users: </u></h2>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th> SL </th>
                                    <th> Name </th>
                                    <th> E-mail </th>
                                    <th> Password </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($guest_user as $ind => $admin)
                                    <tr id="row">
                                        <td> {{ $ind+1 }} </td>
                                        <td> {{ $admin-> name }} </td>
                                        <td> {{ $admin->email }} </td>
                                        <td> {{ $admin->temp_pass }} </td>
                                        <td>
                                            <a href="{{ route('user.update', $admin->id) }}" class="btn btn-warning btn-xs"> Update </a>
                                            <a href="{{ route('user.delete', $admin->id) }}" class="btn btn-danger btn-xs"> Delete </a>
                                        </td>
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
    @else
    <div class = "row" >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Account Settings')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">
                            <h2> No Guest User !!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@else
<div class = "  page-header col-xs-12">
    <div class = " col-xs-12">
        <h1>Account Settings</h1>
    </div>
</div>

<div class = "container">
    @if(count($guest_user)>0)
    <div class = "row" >
        <div class = "col-xs-12" >
            <div class = "panel panel-default" style = "background-color:transparent;" >
                <div class = "panel-heading" > {{__('Account Settings')}} </div>
                <div class = "panel-body" >
                    <div class="row" style="margin-bottom: 30px;">
                        <div class="col-xs-12">

                            <h2> <u> Users: </u></h2>
                            <hr>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th> SL </th>
                                    <th> Name </th>
                                    <th> E-mail </th>
                                    <th> Password </th>
                                    <th> Action </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($guest_user as $ind => $admin)
                                    <tr id="row">
                                        <td> {{ $ind+1 }} </td>
                                        <td> {{ $admin-> name }} </td>
                                        <td> {{ $admin->email }} </td>
                                        <td> {{ $admin->temp_pass }} </td>
                                        @if($user->id==$admin->id)
                                        <td>
                                            <a href="{{ route('user.update', $admin->id) }}" class="btn btn-warning btn-xs"> Update </a>
                                        </td>
                                        @else
                                        <td></td>
                                        @endif
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
    @endif
</div>
@endif
@endsection


