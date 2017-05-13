@extends('layouts.app')

@section('content')

    <h1>contact Page</h1>

    @if(count($people))

        <ul>
        @foreach($people as $name)

           <li>{{$name}}</li>

        @endforeach

        </ul>
    @endif
@stop

@section('footer')
    {{--<script>alert("hello visitor")</script>--}}
@stop
