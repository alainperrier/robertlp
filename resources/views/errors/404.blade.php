<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Page non trouvée</title>
        <meta name="description" content="La page n'existe pas">
        <meta name="keywords" content="Chez robert, Robert">
        <meta name="robots" content="noindex,nofollow"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="alternate" href="http://www.chez-robert.fr/" hreflang="fr-be" >
        <link rel="alternate" href="http://www.chez-robert.fr/" hreflang="x-default">
        <link rel="icon" href="{{ URL::asset('favicon.ico') }}">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    </head>
    <body class="greybackground">
        <div class="container-full">
            <div class="table">
            <div class="content">
                 <h1>
                    <a href="{{ URL('/') }}" title="Chez Robert"><img id="logo" src="{{ URL::asset('images/logo-robert.png') }}" alt="Chez Robert"></a>
                    <span class="alt-h1">Chez Robert</span>
                </h1>
                <h2 class="info margin-fix margin-bot">Vous êtes égaré, cette page n'existe pas</h2>
                <a href="{{ URL('/') }}"><button class="btn btn-success">C'est pas grave, on y retourne !</button></a>
                <p><a href="mailto:contact@chez-robert.fr" class="mailto">contact&#64;chez-robert.fr</a></p>
            </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="js/all.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-73370485-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
