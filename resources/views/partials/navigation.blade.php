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
                    <li ng-class="{active: navCtrl.service}"><a href="itc_service.html">Servizi IT</a></li>
                    <li ng-class="{active: navCtrl.other}"><a href="other.html">Altri Servizi</a></li>
                    <li ng-class="{active: navCtrl.case}"><a href="case_studies.html">Case Studies</a></li>
                    <li><a href="#">Contatti</a></li>
                    <!-- <li><a href="#">News</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>
