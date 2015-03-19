<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('settore', 'Settore:') !!}
    {!! Form::text('settore', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('collegamento', 'Indirizzo Sito:') !!}
    {!! Form::text('collegamento', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('immagine', 'Immagine:') !!}
    {!! Form::file('immagine', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>