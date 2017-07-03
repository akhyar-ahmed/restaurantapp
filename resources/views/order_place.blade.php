@extends('main')

@section('title', "| Food-Orders ")

@section('content')
    <div class = "page-header container col-xs-12 form-group">
		<h1 style="text-align:left; display:inline">Food Ordering - </h1><h2 style="text-align:center; display:inline">(Place your Order here)</h3>
	</div>
    <div class = "container col-xs-12 form-group">
        @include('_orderSearch')
    </div>
	<div id="result" class = "container form-group col-xs-12"></div>
@endsection

