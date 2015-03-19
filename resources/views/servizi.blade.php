<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Riccardo Sartori">
    <title>WE CAN GROUP | Web Agency, Creazione Siti Web, Realizzazione Siti Web - Servizi IT</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link href="css/app.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html4shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target=".navbar">

<header role="banner">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="assets/img/LOGO_SMALL.png" id="bar-logo" alt="We Can" width="120" style="opacity: 0;"></a>
            </div>
            <div id="navbar" class="container navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li id="homeBtn"><a href="/">Home</a></li>
                    <li id="aboutBtn"><a href="about">Chi Siamo</a></li>
                    <li><a href="grafica">Web & Grafica</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Servizi IT <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#saas">Software as a Service SaaS</a></li>
                            <li><a href="#personalizzato">Software personalizzato</a></li>
                            <li><a href="#hardware">Hardware - Software - Periferiche e Accessori</a></li>
                            <li><a href="#locazione">Locazione operativa</a></li>
                        </ul>
                    </li>
                    <li><a href="altro">Altri Servizi</a></li>
                    <li ng-class="{active: navCtrl.case}"><a href="case">Case Studies</a></li>
                    <li><a href="contatti">Contatti</a></li>
                    <!-- <li><a href="#">News</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>


<section id="service-intro" class="jumbotron welcome">
    <div class="container">
        <div class="welcome-message">
            <img src="assets/img/LOGO.png" class="img-responsive center-block" alt="Logo We Can Group">
            <p class="text-center">
                Hai un'esigenza diversa dal web? Yes, We Can&hellip;<br />We Can Group!
            </p>
        </div>
    </div>
</section>

<section id="description">
    <div class="container">
        <div class="row">
            <div class="starter-template col-md-8">
                <h1>SERVIZI IT</h1>
                <p>
                    Siamo una realtà che opera a 360° con un'ampia offerta di soluzioni
                    informatiche, tecnologie, office e servizi. Infatti, oltre ai servizi
                    di Web & Grafica, offriamo una soluzione globale analizzando e confrontando
                    le esigenze del cliente, mettendo a disposizione esperienza, capacità
                    e tenacia affinché i progetti vengano realizzati con la massima cura.
                </p>
                <p>
                    Il nostro Team ha una preparazione ed esperienza nelle tecnologie
                    software e hardware più innovative, sofisticate e d'avanguardia,
                    consolidata in molti anni al servizio di clienti di tutti i settori.
                </p>
                <p>
                    We Can Group è... "Fuori dagli schemi".
                </p>
            </div>
            <div class="col-md-4 hidden-sm hidden-xs">
                <br />
                @include('partials.contatti')
            </div>
            <div class="starter-template col-md-8" id="saas">
                <h1>Il modello SaaS piace sempre di più un'indagine rivela che oltreù
                    il 90% delle aziende continuerà ad investire su queste soluzioni</h1>
                <h2>Descrizione</h2>
                <p>
                    Il SaaS (Software as a Service) è la soluzione per l'utilizzo di
                    licenze software come servizio. Anziché acquistare e tenere aggiornato
                    il software, lo si utilizza semplicemente, senza doversi occupare della
                    complessa gestione delle licenze e degli aggiornamenti, pagando solamente
                    un canone d'uso del servizio.
                </p>
                <h2>Caratteristiche</h2>
                <p>
                    <strong>We Can Group</strong> propone soluzioni di SaaS basate sui propri
                    prodotti permettendo alle aziende di beneficiare di una modalità flessibile
                    ed efficente per le proprie esigenze organizzative e di gestione delle licenze.
                </p>
                <p>
                    L'utilizzo di software in modalità SaaS, a fronte di un canone d'uso, consente di
                    spostare i costi strutturali verso costi operativi eliminando tutte le problematiche
                    legate alla gestione e all'aggiornamento del software, risparmiando e migliorando
                    la gestione del budget.
                </p>
                <p>
                    La soluzione SaaS si presta anche per progetti di sviluppo e test, dove l'uso
                    di nuove piattaforme è temporaneo e l'incidenza del software deve essere minima, favorendo
                    la fattibilità e la riuscita del progetto.
                </p>
                <p>
                    La modalità di licensing possibili in SaaS sono diverse da quelle tradizionali e risultano
                    di gran lunga convenienti a breve e lungo termine.
                </p>
                <h2>Benefici</h2>
                <p>
                    I benefici di questa soluzione sono molteplici e riguardano vari aspetti:
                <dl>
                    <dt>
                        Riduzione dei costi di gestione
                    </dt>
                    <dd>
                        Il pagamento riguarda l'utilizzo dell'applicativo; in questo modo è possibile
                        pianificare in anticipo il budget di spesa.
                    </dd>
                    <dt>
                        Riduzione dei costi di assistenza
                    </dt>
                    <dd>
                        Il supporto è già compreso nel servizio e quindi non sarà necessario l'acquisto
                        separato di canoni di manutenzione.
                    </dd>
                    <dt>
                        Scalabilità ed Elasticità
                    </dt>
                    <dd>
                        Si utilizza solo ciò che è necessario al momento; con la possibilità di espandere
                        le caratterisatiche delle funzionalità con ulteriori moduli che sarà
                        possibile attivare in un secondo momento.
                    </dd>
                    <dt>
                        Facilità di spostamento
                    </dt>
                    <dd>
                        Poichè il software non s'installa, è fruibile via internet ovunque voi siate.
                    </dd>
                </dl>
                </p>
            </div>
            <div class="starter-template col-md-8" id="personalizzato">
                <h1>Creare il software più semplice e su misura
                    per te. La nostra sfida continua!</h1>
                <p>
                    <strong>We Can Group</strong> sviluppa soluzioni software personalizzate
                    su richiesta dei clienti.
                </p>
                <p>
                    I nostri Sviluppatori sparanno aiutarvi nell'affrontare nel modo migliore le
                    scelte che l'innovazione comporta.
                </p>
                <p>
                    La necessità di disporre di un software progettato specificamente per le proprie
                    esigenze rappresenta un fattore molto comune sopratutto per le aziende che, al fine
                    di ottenere una gestione ottimale delle proprie risorse, aumentare la propia produttività
                    e ridurre quindi i costi, non possono utilizzare software già presenti sul mercato.
                </p>
                <p>
                    Troppo spesso infatti l'acquisto di un software preconfezionato implica la modifica
                    e l'adattamento delle abitudini del proprio personale, e qualsiasi personalizzazione
                    richiesta risulta non attiabile o comporta costi molto elevati.
                </p>
                <p>
                    Valuteremo insieme le vostre esigenze, faremo un'analisi accurata che prende in cosiderazione
                    i punti peculiari della vostra azienda sia in campo produttivo che in ambito di organizzazione
                    aziendale. Vi proporremo una soluzione che vi rispecchi velocizzando e semplificando il lavoro.
                </p>
                <h2>Sviluppo software per piattaforme web</h2>
                <p>
                    Per la realizzazione di un portale aziendale sul web, per applicazioni web nei campi immobiliare,
                    annunci, turitico, o integrare i tuoi servizi su una piattaforma web, si rende indispensabile la
                    creazione di una soluzione personalizzata. Possiamo creare applicazioni multipiattaforma ovvero
                    utilizzabili da PC, Tablet, Smartphone. Questo permette di unire la flessibilità alle prestazioni delle
                    applicazioni sviluppate.
                </p>
                <p>
                    Siamo in grado di offrivi, per ogni singola richiesta, un valore aggiunto: la competenza.
                </p>
            </div>
            <div class="starter-template col-md-8" id="hardware">
                <h1>Soluzioni per il tuo Business - parola d'ordine: We Can</h1>
                <p>
                    Il mondo delle soluzioni hardware per l'informatica è vastissimo
                    ed in continua evoluzione.
                </p>
                <p>
                    We Can Group, dopo aver analizzato le problematiche aziendale, si
                    propone come consulente, con personale commerciale competente, aiutando
                    il cliente ad identificare le migliori soluzioni, e nel post-vendita
                    tecnici e sistemisti certificati assistono il cliente nell'evoluzione
                    tecnologica.
                </p>
                <p>
                    Decisamente ampio il ventaglio dei prodotti offerti: dal singolo pc
                    alle grandi forniture, dal portatile al tablet-pc, dal digital signage ai
                    pc industriali, da sistemi antivirus, antiphishing a licenze/software
                    pacchettizato, da sistemi di stampa mono e multifunzione a fotocamere
                    digitali, fax, accessori e consumabili.
                </p>
            </div>
            <div class="starter-template col-md-8" id="locazione">
                <h1>La formula ideale per dotare la tua azienda di strumenti al
                    passo coi tempi</h1>
                <p>
                    Il Noleggio (definito comunemente anche Renting o Locazione operativa)
                    è una soluzione finanziaria a medio/lungo termine che incontra sempre
                    più il favore di aziende e professionisti.
                </p>
                <p>
                    Tale strumento finanziario consente, a fronte del pagamento di un canone
                    fisso periodico, di avere la disponibilità di un bene strumentale all'esercizio
                    della propria professione o sttività imprenditoriale, senza acquistarne la propietà.
                </p>
                <p>
                    Con la locazione operativa è possibile avere un costante aggiornamento tecnologico delle
                    proprie attrezzature in maniera semplice e veloce.
                </p>
                <p>
                    Le soluzioni che offriamo, oltre ad eliminare i costi di smaltimento e di ricollocazione
                    dei beni al termine del loro utilizzo, sono personalizzate sulla base delle effettive
                    necessità di budget e consentono di utilizzare le apparecchiature locate, complete del
                    relativo software e degli eventuali servizi, a fronte di un canone unico mensile o trimestrale.
                </p>
                <h2>I vantaggi della locazione operativa</h2>
                <p>
                <ul>
                    <li>
                        La formula della locazione operativa solleva l'utilizzatore dall'onere e dai
                        costi della gestione dei cespiti.
                    </li>
                    <li>
                        L'IVA viene anticipata dall'Utilizzatore esclusivamente sul valore dei singoli
                        canoni e non su tutto il costo della fornitura.
                    </li>
                    <li>
                        I canoni di locazione sono pienamente deducibili.
                    </li>
                    <li>
                        L'onere e i costi della gestione dello smaltimento dei beni obsoleti vengono eliminati.
                    </li>
                    <li>
                        A fronte del pagamento di un unico canone si acquisice il diritto ad utilizzare hardware,
                        software e relativi servizi. La durata del contratto è adeguata alle caratteristiche dei beni
                        locati e alle esigenze aziendali.
                    </li>
                    <li>
                        Otimmizzazione del ciclo vitale dei prodotti: i beni locati possono essere modificati o
                        ampliati in qualunque momento, anche prima della scadenza del contratto, con semplici
                        adeguamenti contrattuali senza che ciò determini minusvalense per l'utilizzatore.
                    </li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</section>

@include('partials.fondo')

<script src="js/all.js"></script>
</body>
</html>