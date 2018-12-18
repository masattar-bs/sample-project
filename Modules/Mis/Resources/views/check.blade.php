@extends('mis::layouts.master')

@section('content')
    <div class="pull-right">
        <ul class="nav navbar">
            <li><a href="../mis">MIS Home</a></li>
            <li><a href="/mis/check">MIS Check</a></li>
        </ul>
    </div>
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
