<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{ $title }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">


    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600' rel='stylesheet' type='text/css'>



    <link rel="stylesheet" href="/css/normalize.min.css">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/main.css">


    <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body id="{{$pageid}}">

<?php echo View::make('partials.navigation') ?>


<main class="page-wrapper" role="main">



    @yield('content')


</main><!-- end .page-wrapper -->

<?php echo View::make('partials.footer') ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
<script src="/js/main.js"></script>
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>