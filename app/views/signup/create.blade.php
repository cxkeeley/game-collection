@extends('layouts.master')

@section('meta-title', 'Sign up - Game Collerction')

@section('content')

<div class="page-header">
    <h1>Sign up</h1>
</div>
    
{{ Form::open(['route' => 'signup.store']) }}

<!-- Username Field -->
<div class="form-group">
    {{ Form::label('username', 'Username:') }}
    {{ Form::text('username', null, ['class' => 'form-control', 'required' => 'required']) }}
    {{ errors_for('username', $errors) }}
</div>

<!-- Email Field -->
<div class="form-group">
    {{ Form::label('email', 'Email:') }}
    {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) }}
    {{ errors_for('email', $errors) }}
</div>

<!-- Password Field -->
<div class="form-group">
    {{ Form::label('password', 'Password:') }}
    {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
    {{ errors_for('password', $errors) }}
</div>

<!-- Password Confirmation Field -->
<div class="form-group">
    {{ Form::label('password_confirmation', 'Password Confirmation:') }}
    {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) }}
</div>

<!-- Submit Field -->
<div class="form-group">
    {{ Form::submit('Create Account', ['class' => 'btn btn-success']) }}
</div>

{{ Form::close() }}
    
@stop