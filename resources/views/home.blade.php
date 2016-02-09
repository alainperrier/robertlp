<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Chez Robert</title>
        <meta name="description" content="Chez Robert, c'est 4 jeunes entrepreneurs, ultra-motivés et prêts à révolutionner les modes de consommation français. Ne manquez pas le départ !">
        <meta name="keywords" content="Chez robert, Robert">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/app.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-full">
            <div class="homepage-hero-module">
                <div class="video-container">
                    <div class="video-title">
                        <h1><a href="{{ URL('/') }}" title="Chez Robert"><img id="logo" src="{{ URL::asset('images/logo-robert.png') }}" alt="Chez Robert"></a></h1>
                        <h2 class="margin-fix">Ne manquez pas le départ !</h2>
                        <form class="form-inline" action="/" method="POST">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse e-mail">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-success">Go</button>
                        </form>
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <div class="notification">{{ $error }}</div>
                            @endforeach
                        @endif
                        @if(Session::has('message'))
                            <div class="notification">{{ Session::get('message') }}</div>
                        @endif
                        <a href="mailto:contact@chez-robert.fr" class="mailto">contact&#64;chez-robert.fr</a>
                    </div>

                    <div class="filter"></div>
                    <video autoplay loop class="fillWidth">
                        <source src="{{ asset("videos/$video.mp4") }}" type="video/mp4" />Nous vous invitons à mettre à jour votre navigateur pour profiter pleinement de l'expérience
                        <source src="{{ asset("videos/$video.webm") }}" type="video/webm" />Nous vous invitons à mettre à jour votre navigateur pour profiter pleinement de l'expérience
                    </video>
                    <div class="poster hidden">
                        <img src="{{ asset("videos/$video.jpg") }}" alt="">
                    </div>
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
