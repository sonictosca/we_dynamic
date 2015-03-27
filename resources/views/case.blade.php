@extends('inizio')

@section('titolo')
    <title>WE CAN GROUP | Web Agency, Creazione Siti Web, Realizzazione Siti Web - Case Studies</title>
@stop

@section('contenuto')
    <section id="impact">
        <div class="container">
            <h1>Case Studies</h1>
            <div id="contenuto" class="reviews">
                @foreach($cases as $caseStudy)
                    <div class="hreview review-item-1 thumbnail col-sm-6 col-md-4">
                        <a href="{{ $caseStudy->collegamento }}" target="_blank"><img src="uploaded/{{ $caseStudy->immagine }}" class="img-responsive" alt="{{ $caseStudy->nome }}"></a>
                        <div class="caption">
                            <blockquote class="description">
                                <p>
                                    {{ $caseStudy->nome }}
                                </p>
                                <p class="reviewer">{{ $caseStudy->settore }}</p>
                            </blockquote>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop