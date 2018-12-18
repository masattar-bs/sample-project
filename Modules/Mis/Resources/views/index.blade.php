@extends('mis::layouts.master')

@section('content')
    <center>
        <h1>Hello World :)</h1>

        <p>
            This view is loaded from module: {!! config('mis.name') !!}
        </p>
    </center>

@stop
