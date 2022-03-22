@extends('layouts.master')

@section('content')

<div class="page-header">
    <h1>{{ $game->title }} <small>Published by {{ $game->publisher }}</small></h1>
</div>

@stop