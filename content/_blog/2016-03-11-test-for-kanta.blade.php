@extends('_includes.blog_post_base')

@section('post::title', 'Just a test for Katana')
@section('post::date', 'March 11, 2016')
@section('post::brief', 'Just a test for Katana')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    ###Just a test for Katana

    This is just a test for Katana
    @endmarkdown

@stop