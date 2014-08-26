@extends('layouts.default')


@section('main')
<div class="ui segment cms-pagehead">
    <div class="container">
        <h1 class="ui header">Hello, {{ucwords(Auth::user()->username)}}</h1>
    </div>
</div>
<div class="container">
    
</div>
@stop
