@extends('inizio')

@section('titolo')
    <title>WE CAN GROUP | Web Agency, Creazione Siti Web, Realizzazione Siti Web</title>
@stop

@section('contenuto')
<!-- Carousel with multiple images -->
<section id="intro">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active item-1">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Il tuo Business ha bisoigno di un passaggio?</h1>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                                <p>
                                    <img src="assets/img/LOGO.png" class="img-responsive" alt="We Can Group">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item-2">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Ascoltiamo le tue esigenze</h1>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                                <p>
                                    <img src="assets/img/LOGO.png" class="img-responsive" alt="We Can Group">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item-3">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Realizziamo i tuoi progetti</h1>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                                <p>
                                    <img src="assets/img/LOGO.png" class="img-responsive" alt="We Can Group">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item item-4">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Raggiungi i tuoi obiettivi</h1>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                                <p>
                                    <img src="assets/img/LOGO.png" class="img-responsive" alt="We Can Group">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section id="description">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="starter-template">
                    <h1>IT & WEB SOLUTIONS</h1>
                    <p>
                        We Can Group è un'azienda che opera con successo nel settore dell'Information Technology e nella
                        realizzazione di soluzioni web.<br />
                        Dalle esigenze del cliente nascono le nostre proposte che realizziamo con progetto creativi e funzionali.
                    </p>
                    <p>
                        Offriamo diverse tipologie di servizi, dallo studio d'immagine coordinat (logo, biglietti da visita,
                        carta intestata, brochure, etc.) alla realizzazione di siti internet statici, siti internet dinamici,
                        siti e-commerce per il commercio elettronico, siti internet mobile, portali complessi multilingua,
                        blog oltre a sviluppare soluzioni personalizzate web-based.
                    </p>
                    <p>
                        Ci occupiamo della promozione del sito internet sui motori di ricerca (SEM e SEO) e sui social network,
                        dal servizio di traduzione ai servizi fotografici e video.
                    </p>
                    <p>
                        Siamo inoltre qualificati nella consulenza, progettazione e realizzazione di progetti informatici legati
                        all'infrastruttura tecnologica e all'integrazione di sistemi e tecnologie hardware e software.
                    </p>
                    <p>
                        <strong>We Can Group</strong>:  una gamma di servizi professionali, atta a soddisfare le esigenze e
                        le intenzioni di ogni committente.
                    </p>
                    <p>
                        Il nostro obiettivo? Far crescere il tuo business!
                    </p>
                    <br />
                    <div class="row">
                        <div class="col-md-4">
                            <img src="assets/img/pallacanestro.png" alt="pallacanestro Cantù" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h2>Official Sponsor e fornitore tecnologico di Pallacanestro Cantù</h2>
                            We Can Group è sponsor ufficiale di Pallacenstro Cantù ed è stato scelto come fornitore e realizzatore del sito
                            ufficiale della squadra di Serie A e delle squadre giovanili (Progetto Giovani Cantù).
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                @include('partials.contatti')
            </div>
        </div>
    </div>
</section>
@stop
