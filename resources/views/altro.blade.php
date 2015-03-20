@extends('inizio')

@section('titolo')
    <title>WE CAN GROUP | Web Agency, Creazione Siti Web, Realizzazione Siti Web - Altri Servizi</title>
@stop

@section('contenuto')
    <section id="other-intro" class="jumbotron welcome">
        <div class="container">
            <div class="welcome-message">
                <img src="assets/img/LOGO.png" class="img-responsive center-block" alt="Logo We Can Group">
                <p class="text-center">
                    Ogni parola ha la sua importanza!
                </p>
            </div>
        </div>
    </section>

    <section id="description">
        <div class="container">
            <div class="row">
                <div class="starter-template col-md-8">
                    <h1>Traduzioni ed Interpretariato</h1>
                    <p>
                        Certamente avrete investito, tempo, denaro ed energie nel decidere come
                        comunicare il vostro messaggio e come proporre al meglio il costro prodotto
                        o il vostro servizio.
                    </p>
                    <p>
                        Avrete scelto e soppesato con cura le parole, la struttura della frase, lo stile;
                        analizzato e studiato come informare i vostri clienti sulla vostra attività in modo
                        da entusiasmarli, usando la corretta terminologia ed una giusta dose di linguaggio
                        della comunicazione.
                    </p>
                    <p>
                        Del resto, è il contenuto, oltre al design, che convince ad acquistare.
                    </p>
                    <p>
                        Tutto ciò è il presupposto anche di una buona traduzione.
                    </p>
                    <p>
                        Un servizio di traduzione professionale non traduce solo parole: traduce
                        il vostro stile, il messaggio, i toni e i significati sottili.
                    </p>
                    <p>
                        La traduzione riprende i testi, la documentazione di vendita o il vostro
                        sito Web, creati nella vostra lingua, e li ricrea efficacemente in un'altra
                        lingua per un mercato diverso.
                    </p>
                    <p>
                        Una buona traduzione è una soluzione completa di qualità, precisione ed
                        efficacia linguistica, in cui il testo tradotto ha la stessa forza d'impatto
                        del testo sorgente; è la garanzia che il vostro messaggio sia comunicato al
                        mercato destinatario nel modo migliore.
                    </p>
                    <div id="interpretariato">
                        <h2>I nostri servizi d'interpretariato</h2>
                        <p>
                        <ul>
                            <li>
                                Traduzioni di documenti
                            </li>
                            <li>
                                Traduzioni letterarie
                            </li>
                            <li>
                                Traduzioni legali
                            </li>
                            <li>
                                Traduzioni commerciali
                            </li>
                            <li>
                                Traduzioni tecniche
                            </li>
                            <li>
                                Loacalizzazione di siti web
                            </li>
                            <li>
                                Localizzazione di software
                            </li>
                            <li>
                                Traduzioni mediche
                            </li>
                        </ul>
                        </p>
                        <p>
                            Attraverso <strong>We Can Group</strong> potrete comunicare con tutto
                            il mondo in modo chiaro e preciso nella lingua del vostro interlocutore.
                        </p>
                        <p>
                            Il modo migliore per intraprendere nuovi contatti e consolidare quelli
                            acquisiti, è far sentire chi siede di fronte a noi a proprio agio. Vi
                            accompagneremo in tutti gli stadi: servizi di interpretariato durante le
                            trattative, traduzioni e se vorrete potremo accompagnarvi durante fiere
                            in Italia o allìestero.
                        </p>
                        <p>
                            Per gli operatori del turismo poter offrire ai propri clienti un interprete
                            che li accompagni nella loro attività lavorative e nei momenti di svago visitando
                            le nostre belle città, è sicuramente un valore aggiunto.
                        </p>
                        <p>
                            I nostri servizi d'interpretariato sono qualificati, perchè ci avvaliamo esclusivamente
                            di professionisti con anni di esperienza sulle spalle.
                        </p>
                        <p>
                            Ne diciamo di tutte le lingue... contattateci per avere più informazioni.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <br />
                    @include('partials.contatti')
                </div>
            </div>
        </div>
    </section>

@stop
