<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Static navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <img class="logo" src="assets/img/logo.png"/>
            </ul>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">
                        <span class="glyphicon glyphicon-home"
                              aria-hidden="true"></span>
                    </a>
                </li>
                <li><a href="#">O nas</a></li>
                <li><a href="#">Partnerzy</a></li>
                <li><a href="#">Kontakt</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Cennik</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Logo 1</a></li>
                <li><a href="#">Logo 2</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>