@extends('frontend.master')
@section('title')
    Máy bơm nước
@stop
@section('description')
    Công ty máy bơm nước
@stop
@section('styles')

@stop
@section('slider')
@include('frontend.home.home_leftmenu')
@stop
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('frontend.home.h_sidebar')
            </div>
            <div class="col-md-9">
                @include('frontend.home.h_slider')
                @include('frontend.home.h_product')
            </div>
        </div>
    </div>

@stop