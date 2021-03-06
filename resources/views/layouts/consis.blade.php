<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Consis</title>
     <!-- favicon -->
     <link rel="shortcut icon" sizes="16x16" type="image/png" href="consis/images/header/favicon.png"/>
     <meta name="description" content="I CONSIS - Congresso de Sistemas de Informação FAHESA/ITPAC de 24 à 27 de outubro - Palestras, Minicursos, Submissão de Artigos, Campeonatos.">
     <meta name="keywords" content="I Consis, Consis Congresso, Consis 2016, Consis Araguaina, Araguaina Congresso,HTML,CSS,XML,JavaScript,Palestras,Jean carlos Suissa,normadev,minicursos,sistemas,wordpres,arduino,code dojo,league of legends, lol, cs, COUNTER STRIKE, artigos, submissão,tcc,evento">
    <!-- Bootstrap -->
    <meta name="google-site-verification" content="qym3HhFYBt4Y7Q7xcKifTswHIwYjDofyQO9CaQGeF5U" />
    <meta name="google-site-verification" content="qym3HhFYBt4Y7Q7xcKifTswHIwYjDofyQO9CaQGeF5U" />
    <link href="{{ asset('consis/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('consis/css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <!-- Font Awesome  -->
    <link href="{{ asset('consis/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Countdown -->
    <link href="{{ asset('consis/css/jquery.countdown.css') }}" rel="stylesheet">
    <!-- Google Fonts -->

    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <!--    Owl Carousel css -->
    <link rel="stylesheet" href="{{ asset('consis/css/owl.carousel.css') }}" type="text/css" media="screen">

    <!-- LightBox -->
    <link rel="stylesheet" href="{{ asset('consis/vendors/Lightbox/lightbox.min.css') }}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('consis/vendors/flexslider/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('consis/vendors/flexslider/preloader.css') }}">
    <!-- Gallery.scss -->
    <link rel="stylesheet" href="{{ asset('consis/scss/_gallery.scss') }}">
    <!-- style.css-->
    <link rel="stylesheet" href="{{ asset('consis/css/style.css') }}">

    <!-- Analytics  -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64656641-5', 'auto');
  ga('send', 'pageview');

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>
</head>
<body>

    @include('consis.header')


    @include('consis.summary')


    @include('consis.register')

    @include('consis.event')

   {{--  @include('consis.subscribe') --}}




    @include('consis.speakers')





    @include('consis.comments')

    @include('consis.courses')


   @include('consis.pricing')
    <!-- Patrocinadores -->
    @include('consis.sponsors')

    @include('consis.contact')

    @include('consis.footer')







    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="{{ asset('consis/vendors/flexslider/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('consis/js/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('consis/js/animatescroll/animatescroll.js') }}"></script>
    <script src="{{ asset('consis/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('consis/js/owl.carousel.min.js') }}"></script>

    <!-- LightBox -->
    <script src="{{ asset('consis/vendors/Lightbox/lightbox.min.js') }}"></script>
    <!-- Mixitup JS -->
    <script type="text/javascript" src="{{ asset('consis/vendors/mixitup/jquery.mixitup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('consis/js/preloader.js') }}"></script>
    <!-- Map JS -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAL3KSOmk3G8GaJvPDULfDCLoY73UFIAaU"></script>
    <script type="text/javascript" src="{{ asset('consis/vendors/map/gmaps.min.js') }}"></script>
    <script src="{{ asset('consis/vendors/map/map.js') }}"></script>

    <script src="{{ asset('consis/js/custome.js') }}"></script>
</body>
</html>
