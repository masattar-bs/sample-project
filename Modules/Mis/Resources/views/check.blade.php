@extends('mis::layouts.master')

@section('content')
    <center>
        <h1>HI (-_-)</h1>
        <h3>MIS Check Page</h3>

        <p>
            This view is loaded from module: {!! config('mis.name') !!}
        </p>
        <p>
            This page was loading after traversing new controllers prepared using laravel-module through composer
        </p>
    </center>

@stop
