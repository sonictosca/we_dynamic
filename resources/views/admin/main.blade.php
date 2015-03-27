@extends('admin.base')

@section('contenuto')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Pagina di amministrazione</h1>
            </div>
            <div class="col-md-12">
                <a href="{{action('AdminController@indexCases')}}" class="btn btn-primary" role="button">Gestisci Case Study</a>
                <a href="{{action('AdminController@indexNews')}}" class="btn btn-primary" role="button">Gestisci news</a>
            </div>
        </div>
    </div>
@endsection