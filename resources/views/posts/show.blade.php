@extends('layouts.app')
<!--<meta name="csrf-token" content="{{ csrf_token() }}" /> -->
@section('content')

    <h1><a href="{{route('posts.edit',$post->id)}}">
            {{$post->title}}
        </a></h1>

    {{--$content--}}

    @yield('footer')