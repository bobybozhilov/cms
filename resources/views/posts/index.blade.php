@extends('layouts.app')
<!--<meta name="csrf-token" content="{{ csrf_token() }}" /> -->
@section('content')
    <a href="{{route('posts.create')}}">Create post</a>
    <br>
    <ul>
        @foreach( $posts as $post)
        <li><a href="{{route('posts.edit',$post->id)}}">{{$post->user_id}}: {{$post->title}}: {{$post->content}}</a></li>
            @endforeach
    </ul>
 {{--$content--}}

    @yield('footer')