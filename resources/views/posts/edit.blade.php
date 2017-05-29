@extends('layouts.app')
<!--<meta name="csrf-token" content="{{ csrf_token() }}" /> -->
@section('content')

    <h2>Edit Post</h2>

    <form method="post" action="/posts/{{$post->id}}">

        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

        <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}">

        <input type="text" name="content" placeholder="Enter content" value="{{$post->content}}">

        <input type="submit" name="submit" value="SUBMIT">

    </form>

    <form method="post" action="/posts/{{$post->id}}">

        <input type="hidden" name="_method" value="DELETE">

        <input type="submit" value="DELETE">

    </form>
    @yield('footer')