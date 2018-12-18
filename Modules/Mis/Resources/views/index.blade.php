@extends('mis::layouts.master')

@section('content')
    <center>
        <h1>Hello World :)</h1>

        <p>
            This view is loaded from module: {!! config('mis.name') !!}
        </p>
        <p>
            This page was created automatically from the composer command line using the laravel-module feature
        </p>
    </center>

@stop
