@extends('inizio')

@section('titolo')
<title>WE CAN GROUP | Web Agency, Creazione Siti Web, Realizzazione Siti Web - Chi Siamo</title>
@stop

@section('contenuto')
<section id="about-intro" class="jumbotron welcome">
    <div class="container">
      <div class="welcome-message">
        <img src="assets/img/LOGO.png" class="img-responsive center-block" alt="Logo We Can Group">
        <p class="text-center">
          siamo una realtà con <em>un'ampia</em> offerta di servizi avanzati di comunicazione, soluzioni informatiche, tecnologie e office.
        </p>
      </div>
    </div>
  </section>

  <section id="description">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="starter-template">
            <p>
              We Can Group è un'azienda innovativa in costante evoluzione che nasce dall'idea di sviluppare e sperimentare nuovi modi per impiegare
              al meglio le teconologie e le potenzialità di internet, anticipandone direzioni e tendenze.
            </p>
            <p>
              Abbiamo competenze consolidate nell'erogazione di servizi di consulenza e di comunicazione, dalla definizione dell'identità visiva, alla
              progettazione di siti internet fino alla realizzazione di qualisiasi attività di web marketing (SEM e SEO), dall'advertising interattivo al Viral
              e Social Media Marketing.
            </p>
            <p>
              Siamo una realtà che opera a 360 gradi con un'ampia offerta di soluzioni informatiche, tecnologiche, office e servizi. Infatti, oltre al settore
              di Image & Communication, offriamo una soluzione globale analizzando e confrontando le esigenze del cliente, mettenmdo a disposizione esperienza,
              capacità e tenacia affinchè i progetti vengano realizzati con la massima cura.
            </p>
            <p>
              Il nostro Team ha una preparazione ed esperienza, consolidata in molti anni, al servizio dei clienti per tutti i settori delle tecnologie hardware
              e software d'avanguardia più sofisticate ed innovative.
            </p>
            <p>
              <em>L'amore per il lavoro che facciamo, la seria e corretta professionalità, l'entusiasmo, lo spirito innovativo e il rapido adeguamento agli
              sviluppi del mercato sono i componenti che hanno dato vita alla nostra filosofia, al nostro marchio: <strong>"WE CAN GROUP"</strong></em>
            </p>
            <h2>Team Leader</h2>
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="assets/img/stefano.jpg" alt="Stefano Capellini">
              </div>
              <div class="media-body">
                <h4 class="media-heading">Stefano Capellini</h4>
                <p>
                  Founder di We Can Group, ha ispirato la filosofia aziendale e può essere considerato un veterano del settore
                  commerciale.
                </p>
                <p>
                  Si adopera nel mettere il suo know-how al servizio del marketing e capire quali strategie e prodotti proporre ai propri
                  clienti. Stefano si distingue per le sue abilità comunicative, ma sopratutto per la chiarezza con le quale descrive e propone
                  prodotti e servizi.
                </p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="assets/img/alessandra.jpg" alt="Alessandra Hofmann">
              </div>
              <div class="media-body">
                <h4 class="media-heding">Alessandra Hofmann</h4>
                <p>
                  Unica donna dell'area manager, Alessandra, oltre a "sopportare" gli uomini del team
                  si occupa di Inside Sales offrendo un servizio attento e sempre aggiornato rispetto
                  alle novità del settore ICT.
                </p>
                <p>
                  Gestisce le attività di formazione e coaching individuale e collettivo e, con trascorso di
                  Hostess in Lufthansa, è a capo del team che seguwe i servizi d'interpretariato che We Can Group offre
                  alla propia clientela.
                </p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="assets/img/daniele.jpg" alt="Daniele Maggioni">
              </div>
              <div class="media-body">
                <h4 class="media-heding">Daniele Maggioni</h4>
                <p>
                  Manager, stratega e "scrittore".
                </p>
                <p>
                  Daniele svolge l'importante attività di scrittura codice per lo sviluppo CMS in
                  continua evoluzione ed è colui che permette, attraverso il propio lavoro, l'opportunità
                  di ampliare l'offerta di We Can Group per il passaggio da un sito vetrina a un sito dinamico.
                </p>
                <p>
                  Si occupa di gestire i rapporti interni tra gli sviluppatori e collabora alla realizzazione
                  grafica di Web Site avendo particolare cura della facilità di navigazione.
                </p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="assets/img/paolo.jpg" alt="Paolo Redaelli">
              </div>
              <div class="media-body">
                <h4 class="media-heding">Paolo Redaelli</h4>
                <p>
                  Team leader in ambito di sviluppo segue le fasi di analisi, progettazione,
                  implementazione e test.
                </p>
                <p>
                  Paolo si occupa di sviluppare applicazioni web based e non, cura il codice di
                  programmazione per ottimizzare database e linguaggi markup.
                </p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="assets/img/emanuele.jpg" alt="Emanuele Zappa">
              </div>
              <div class="media-body">
                <h4 class="media-heding">Emanuele Zappa</h4>
                <p>
                  Opera nel settore informatico da più di dieci anni con mansioni tecnico sistemistiche,
                  svolge attività di coordinamento dei progetti Hardware e Software.
                </p>
                <p>
                  Per We Can Group è il responsabile dell'ufficio Sistemi e Reti, coordina le attività di
                  installazione dalla singola postazione alla progettazione e la realizzazione delle Lan.
                </p>
                <p>
                  Emanuele cura le novità e gli aspetti tecnologici dei sistemi informativi, si prodiga per
                  la predisposizione delle infarstrutture e delle architetture tecnologiche necessarie oltre a
                  mettere in sicurezza fisica e logica gli ambienti tecnologici, i sistemi operativi e le applicazioni.
                  Emanuele è il nostro uomo con gli "scudetti" al petto per le certificazioni ottenute.
                </p>
              </div>
            </div>
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
