@extends('admin.base')

@section('contenuto')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! Form::model($use, ['method' => 'PUT', 'action' => ['AdminController@updateCase', $use->id], 'files' => 'true']) !!}
                    @include('admin.form', ['submitButtonText' => 'Modifica Case Study'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection