@extends('layouts.master')

@section('content')

<div class="page-header">
    <h1>Create New Game</h1>
</div>

{{ Form::open(['method' => 'POST', 'route' => 'games.store']) }}
    
    @include('games/partials/_form')

{{ Form::close() }}

@stop