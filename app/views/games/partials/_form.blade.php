<!-- Title Field -->
<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Call of Duty']) }}
    {{ errors_for('title', $errors) }}
</div>

<!-- Publisher Field -->
<div class="form-group">
    {{ Form::label('publisher', 'Publisher') }}
    {{ Form::text('publisher', null, ['class' => 'form-control', 'placeholder' => 'Activision']) }}
    {{ errors_for('publisher', $errors) }}
</div>

<!-- Completed Field -->
<div class="checkbox">
    {{ Form::label('completed', 'Completed?') }}
    {{ Form::checkbox('completed') }}
</div>

<!-- Submit Field -->
<div class="form-group">
    {{ Form::submit(isset($buttonText) ? $buttonText : 'Create Game', ['class' => 'btn btn-success']) }}
    {{ link_to_route('games.index', 'Cancel', null, ['class' => 'btn btn-default']) }}
</div>