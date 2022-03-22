@extends('layouts.master')

@section('content')

<div class="page-header">
    <h1>Delete {{ $game->title }} <small>Are you sure?</small></h1>
</div>

{{ Form::open() }}

    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Yes') }}
    {{ link_to_route('games.index', 'No') }}

{{ Form::close() }}

@stop