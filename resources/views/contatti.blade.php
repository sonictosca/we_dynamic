@extends('inizio')

@section('titolo')
    <title>WE CAN GROUP | Web Agency, Creazione Siti Web, Realizzazione Siti Web - Contatti</title>
@stop

@section('contenuto')
    <section id="contatti-intro" class="jumbotron welcome">
        <div class="container">
        </div>
    </section>

    <section id="description">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>AAA professionalità, competenza e soluzioni offresi!</h1>
                    <h2>We can group snc</h2>
                    <p>
                        Via S. Ambrogio, 81<br>22066 Mariano Comense (Co), Italia<br />
                        <strong>Telefono:</strong> +39 031.744823<br />
                        <strong>Fax:</strong> +39 031.5472135<br />
                        <strong>E-mail:</strong> <a href="mailto:info@wecangroup.it">info@wecangroup.it</a>
                    </p>
                </div>
                <div class="col-md-4">
                    <br>
                    @include('partials.contatti')
                </div>
            </div>
        </div>
    </section>
@stop
