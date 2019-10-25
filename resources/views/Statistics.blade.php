@extends('layouts.all')
@section('title')
    Drosophila-Statistics
@stop
@section('content')

<p class="p-select">
   <img src="{{URL::asset('/image/pj-14.png')}}"/>
   Statistics
</p>

<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <p>In this part, we will show some figures of our data.</p>
        <img src="{{URL::asset('/image/Rplot1.png')}}" style="width:100%; height: 70%;"/>
    </div>
    <div class="col-sm-1"></div>
</div>

@stop