(function () {
    'use strict';
    $(window).scroll(function () {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
            $(".navbar-fixed-top").removeClass("navbar-inverse");
            $(".navbar-fixed-top").addClass("navbar-default");
            $("#bar-logo").css("opacity", 100);
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
            $(".navbar-fixed-top").addClass("navbar-inverse");
            $(".navbar-fixed-top").removeClass("navbar-default");
            $("#bar-logo").css("opacity", 0);
        }
    });

    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement('style')
        msViewportStyle.appendChild(
            document.createTextNode(
                '@-ms-viewport{width:auto!important}'
            )
        )
        document.querySelector('head').appendChild(msViewportStyle);
    }

    WebFont.load({
        google: {
            families: ['Droid Sans', 'Droid Serif']
        }
    });

    /*
      funzione di scroll per navigazione


    function scrollToSection(id) {
      var sectionTag = $('#' + id);
      $('html, body').animate({scrollTop: sectionTag.offset().top}, 'slow');
    }

    $("#graphicsDesignLink").click(function() {
      scrollToSection('graphicsDesign');
      $('#graphicsDesignBtn').addClass('active');
    });
    */
    /*
      Funzione di avvio aggiunge style alla barra di navigazione
    */

    $(document).ready(function() {
      var pathname = window.location.pathname;
      var url = window.location.href;
      console.log('url ' + url);
      console.log('pathname ' + pathname);
      if (pathname === '/') {
        $('#homeBtn').addClass('active');
      } else if (pathname === '/about') {
        $('#aboutBtn').addClass('active');
      }
    });
}) ();
