@extends('layouts/master')

@section('content')

<div class="page-header">
    <h1>
        {{ $user->username }}
        @if ($user->profile->location)
            <small>{{ $user->profile->location }}</small>
        @endif
    </h1>
</div>

@if ($user->profile->bio)
    <p>{{ $user->profile->bio }}</p>
@endif

@if (
    $user->profile->twitter_username 
    or $user->profile->facebook_username
    or $user->profile->github_username
)
    <ul>
        @if ($user->profile->twitter_username)
            <li>{{ link_to('https://twitter.com/' . $user->profile->twitter_username, 'Find me on Twitter') }}</li>
        @endif
        @if ($user->profile->facebook_username)
            <li>{{ link_to('https://www.facebook.com/' . $user->profile->facebook_username, 'Find me on Facebook') }}</li>
        @endif
        @if ($user->profile->github_username)
            <li>{{ link_to('https://github.com/' . $user->profile->github_username, 'View my work on GitHub') }}</li>
        @endif
    </ul>
@endif

@if ($user->isCurrent())
    <div class="form-group">
        {{ link_to_route('profile.edit', 'Edit your profile', $user->username, ['class' => 'btn btn-link']) }}
    </div>
@endif
    
@stop