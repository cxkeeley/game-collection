@extends('layouts.master')

@section('content')

<div class="page-header">
    <h1>Edit Game</h1>
</div>

{{ Form::model($game, ['method' => 'PATCH', 'route' => ['games.update', $game->id]]) }}
    
    @include('games/partials/_form', ['buttonText' => 'Update Game'])
    
{{ Form::close() }}

@stop