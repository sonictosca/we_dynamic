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

    $().ready(function() {
      var pathname = window.location.pathname;
      var url = window.location.href;
      console.log('url ' + url);
      console.log('pathname ' + pathname);
      if (pathname === '/') {
        $('#homeBtn').addClass('active');
      } else if (pathname === '/about') {
        $('#aboutBtn').addClass('active');
      } else if (pathname === '/altro') {
          $('#otherBtn').addClass('active');
      } else if (pathname === '/contatti') {
          $('#contactsBtn').addClass('active');
      }
    });

    $('#contattiForm').validate({
        rules: {
            nomeCognome: {
                required: true,
                minlength: 2
            },
            telefono: {
                required: true,
                digits: true
            },
            email: {
                required: true,
                email: true
            },
            txtMsg: {
                required: true,
                minlength: 8
            },
            consenso: {
                required: true
            }
        },
        messages: {
            nomeCognome: {
                required: 'Per favore inserite il vostro nome e cognome',
                minlength: 'Il nome deve essere composto da almeno due caratteri'
            },
            telefono: {
                required: 'Per favore inserite il vostro numero di telefono',
                digits: 'Inserite un numero di telefono valido'
            }
        },
        highlight: function(element) {
            if (element.type !== 'checkbox') {
                $(element).closest('.form-group').addClass('has-error');
            } else {
                $(element).closest('.checkbox').wrap("<div class='has-error'></div>");
            }
        },
        unhighlight: function(element) {
            if (element.type !== 'checkbox') {
                $(element).closest('.form-group').removeClass('has-error');
            } else {
                $(element).closest('.checkbox').unwrap();
            }
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });
}) ();
