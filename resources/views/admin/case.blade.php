@extends('admin.base')

@section('contenuto')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Gestione Case Studies</h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Settore</th>
                        <th>Sito</th>
                        <th>Posizione</th>
                        <th>Elimina</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cases as $case)
                        <tr>
                            <td><a href="{{ action('AdminController@editCase', [$case->id]) }}">{{ $case->nome }}</a></td>
                            <td>{{ $case->settore }}</td>
                            <td>{{ $case->collegamento }}</td>
                            <td>
                                @unless($case->posizione == $massimo)
                                    <a href="{{action('AdminController@upCase', $case->id)}}" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-menu-up"></span></a>
                                @endunless
                                @unless($case->posizione == $minimo)
                                    <a href="{{action('AdminController@downCase', $case->id)}}" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-menu-down"></span></a>
                                @endunless
                            </td>
                            <td>
                                <a href="{{action('AdminController@deleteCase', $case->id)}}" class="btn btn-primary" role="button">Elimina</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="admin/addcase" class="btn btn-default" href="admin aggiungi" role="button">Aggiungi Case Study</a>
            </div>
        </div>
    </div>
@endsection