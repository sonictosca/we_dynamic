@extends('admin.base')

@section('contenuto')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['url' => 'admin/addcase', 'files' => 'true']) !!}
                @include('admin.form', ['submitButtonText' => 'Aggiungi Case Study'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection