@extends('frontend.master')
@section('title')@if($data['type']==0){{$data['categoryPost']->seo_title}}@else{{$data['post']->seo_title}}@endif
@stop
@section('description')@if($data['type']==0){{$data['categoryPost']->seo_description}}@else{{$data['post']->seo_description}}@endif
@stop
@section('keyword')@if($data['type']==0){{$data['categoryPost']->seo_keywords}}@else{{$data['post']->seo_keywords}}@endif
@stop

@section('container')
    @include('frontend.news.n_all')
@stop