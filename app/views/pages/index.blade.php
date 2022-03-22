@extends('layouts.master')

@section('content')

<div class="jumbotron">
    <h1>{{ Auth::check() ? "Welcome " . Auth::user()->username : "Welcome!" }}</h1>
    <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    @if( ! Auth::check())
    <p><a class="btn btn-lg btn-success" href="/signup" role="button">Sign up today</a></p>
    @endif
</div>

@stop