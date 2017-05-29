@extends('layouts.app')
<!--<meta name="csrf-token" content="{{ csrf_token() }}" /> -->
@section('content')

    <h2>Create Post</h2>

    <form method="post" action="/posts">
     {{ csrf_field() }}

        <input type="text" name="title" placeholder="Enter title">
        <input type="text" name="content" placeholder="Enter content">

        <input type="submit" name="submit">

    </form>

@yield('footer')