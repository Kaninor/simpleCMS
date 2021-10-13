@extends('layouts.app')

@section('head')
    <title>Home</title>
    <style>
        body{
            font-family: 'Nunito', sans-serif;
            background-color: black;
            color: white;
        }
    </style>
@stop

@section('body')
    @foreach($tests as $test)
    <ul>
        <li>{{ $test->id }}</li>
        <li>{{ $test->title }}</li>
        <li>{{ $test->target }}</li>
        <li>{{ $test->created_at }}</li>
        <li>{{ !empty($test->updated_at) ? $test->updated_at : "------------" }}</li>
    </ul>
    @endforeach
@stop

@section('scripts')
    <script>
        $("html").on('click', function (){
            $("body").css("color", "gray");
        });
    </script>
@stop
