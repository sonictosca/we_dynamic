<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Riccardo Sartori">
    @yield('titolo')
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link href="css/app.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html4shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('partials.navigation')

@yield('contenuto')

@include('partials.fondo')

<script src="js/all.js"></script>
</body>
</html>
