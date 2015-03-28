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
     * Funzione per lanciare layout su masonry
     * solo una volta che tutte le immagini sono 
     * state caricate
     */

    if (window.location.pathname === '/case') {
        var contenuto = document.querySelector('#contenuto');
        var msnry = new Masonry(contenuto, {
            itemSelector: '.hreview'
        });

        imagesLoaded(contenuto, function () {
            msnry.layout();
        });
    }
    
    /*
     * Funzione di avvio aggiunge stili alla barra di navigazione,
     * inizializza e valida la form di contatto
     */

    $().ready(function() {
        $('#errore').addClass('hide');
        $('#successo').addClass('hide');
      var pathname = window.location.pathname;
      var url = window.location.href;
      if (pathname === '/') {
        $('#homeBtn').addClass('active');
      } else if (pathname === '/contatti') {
          $('#contactsBtn').addClass('active');
      } else if (pathname === '/case') {
          $('#caseBtn').addClass('active');
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
            },
            email: {
                required: 'Per favore inserite il vostro indirizzo e-mail',
                email: 'Per favore inserite un indirizzo e-mail valido.'
            },
            txtMsg: {
                required: 'Per favore lasciateci un breve messaggio',
                minlength: 'Il messaggio non è abbastanza lungo'
            },
            consenso: {
                required: 'Per poter rispondere alla vostra richiesta dovete consentire al trattamento dei vostri dati'
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
        },
        submitHandler: function(form) {
            var dati = {
                nomeCognome: $('#nomeCognome').val(),
                telefono: $('#telefono').val(),
                email: $('#email').val(),
                txtMsg: $('#txtMsg').val()
            }
            $('#nomeCognome').val('');
            $('#telefono').val('');
            $('#email').val('');
            $('#txtMsg').val('');
            var method = $('input[name="_method"]').val() || 'POST';
            var url = $(form).prop('action');
            $.ajax({
                type: method,
                url: url,
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                },
                data: dati,
                success: function() {
                    $('#successo').removeClass('hide');
                },
                error: function() {
                    $('#errore').removeClass('hide');
                }
            });
        }
    });
}) ();
