<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.ico">

    <title>Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <?php $this->load->view('navbar'); ?>
</div>
<div class="container-fluid">

    <img class="img-responsive" src="http://placehold.it/1920x410"/>

</div>
<div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    <div class="section promocje_cennik">
        <div class="row">
            <div class="col-md-6">
                <h3>Promocje</h3>
                <img class="img-responsive" src="assets/img/promocje.png"/>
            </div>
            <div class="col-md-6">
                <h3>Cennik</h3>
                <img class="img-responsive" src="assets/img/cennik.png"/>
            </div>
        </div>
    </div>

    <div class="section oferta">
        <div class="row">
            <div class="col-md-12 purple section_header"><p>Oferta</p></div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <p>Zdjęcia i odbitki</p>
                <img class="img-responsive" src="assets/img/odbitki.png">
            </div>
            <div class="col-md-3">
                <p>Kalendarze</p>
                <img class="img-responsive" src="assets/img/kalendarze.png">
            </div>
            <div class="col-md-3">
                <p>Fotoksiążki</p>
                <img class="img-responsive" src="assets/img/fotoksiazki.png">
            </div>
            <div class="col-md-3">
                <p>Fotoboardy</p>
                <img class="img-responsive" src="assets/img/fotoboardy.png">
            </div>
            <div class="col-md-3">
                <p>Wydruki cyfrowe</p>
                <img class="img-responsive" src="assets/img/wydruki.png">
            </div>
            <div class="col-md-3">
                <p>Fotoalbumy</p>
                <img class="img-responsive" src="assets/img/fotoalbumy.png">
            </div>
            <div class="col-md-6">
                <p>Pozostałe produkty</p>
                <img class="img-responsive" src="assets/img/pozostale.png">
            </div>
        </div>
    </div>

    <div class="section ostatnio_zakupione">
        <div class="row">
            <div class="col-md-12 red section_header"><p>Ostatnio zakupione</p></div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img class="img-responsive" src="assets/img/zakupione1.png">
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="assets/img/zakupione2.png">
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="assets/img/zakupione3.png">
            </div>
        </div>

    </div>

</div> <!-- /container -->
<div class="container-fluid footer">



</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
