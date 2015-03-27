@extends('admin.base')

@section('contenuto')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['url' => 'admin/addnews', 'files' => 'true']) !!}
                    @include('admin.news.form', ['submitButtonText' => 'Aggiungi News'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection