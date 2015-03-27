@extends('admin.base')

@section('contenuto')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Elenco news</h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Titolo</th>
                        <th>Inizio</th>
                        <th>Fine</th>
                        <th>Creata il</th>
                        <th>Modificata il</th>
                        <th>Elimina</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $new)
                        <tr>
                            <td>{{ $new->titolo }}</td>
                            <td>{{ $new->inizio or '##' }}</td>
                            <td>{{ $new->fine or '##' }}</td>
                            <td>{{ $new->created_at }}</td>
                            <td>{{ $new->updated_at }}</td>
                            <td><a href="#" class="btn btn-primary" role="button">Elimina</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{action('AdminController@addNews')}}" class="btn btn-default" role="button">Aggiungi news</a>
            </div>
        </div>
    </div>
@endsection