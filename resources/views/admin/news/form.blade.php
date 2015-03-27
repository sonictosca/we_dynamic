<div class="form-group">
    {!! Form::label('titolo', 'Titolo:') !!}
    {!! Form::text('titolo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('contenuto', 'Testo:') !!}
    {!! Form::textarea('contenuto', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('inizio', 'Valida dal:') !!}
    {!! Form::input('date', 'inizio', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('fine', 'Valida Al:') !!}
    {!! Form::input('date', 'fine', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('immagine', 'Immagine:') !!}
    {!! Form::file('immagine', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>