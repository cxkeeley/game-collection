@extends('layouts.master')

@section('content')

<div class="page-header">
    <h1>Games</h1>
</div>

<p>{{ link_to_action('games.create', 'Create New Game', null, ['class' => 'btn btn-success']) }}</p>

@if ($games->isEmpty())
    <p>There are no games in the collection.</p>
@else
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Publisher</th>
                <th>Completed</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
                <tr>
                    <td>{{ link_to_route('games.show', $game->title, $game->id, ['class' => 'btn btn-xs btn-default']) }}</td>
                    <td>{{ $game->publisher }}</td>
                    <td>{{ $game->completed ? 'yes' : 'no' }}</td>
                    <td>
                        {{ link_to_route('games.edit', 'Edit', $game->id, ['class' => 'btn btn-xs btn-primary pull-left']) }}
                        {{ Form::open(['url' => 'games/' . $game->id]) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

@stop