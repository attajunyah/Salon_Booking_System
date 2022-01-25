<!DOCTYPE html>
<html>
    <head>
        <!-- Animations -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <link rel="stylesheet" href="css/main1.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
            crossorigin="anonymous"></script>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Curlz</title>
    </head>

    <body id="home" class="scrollspy">

        <!-- Navbar -->
        <div class="navbar-fixed">
            <nav class="pink darken-1">
            <div class="container">
                <div class="nav-wrapper">
                <a href="#" class="navbar-brand" ><img src="img/logod.png" style="max-width:150px "></a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li>
                    <a href="#home">HOME</a>
                    </li>
                    <li>
                    <a href="#search">SEARCH</a>
                    </li>
                    <li>
                    <a href="#popular">POPULAR PACKAGES</a>
                    </li>
                    <li>
                    <a href="#ourteam">OUR TEAM</a>
                    </li>
                    <li>
                    <a href="#gallery">GALLERY</a>
                    </li>
                    <li>
                    <a href="#contact">CONTACT</a>
                    </li>
                    
                    <li>
                        <a class="btn pink darken-4 z-depth-3 " href="logout.php">logout</a>
                    </li>  
                </ul>
                </div>
            </div>
            </nav>
        </div>
        <ul class="sidenav" id="mobile-nav">
            <li>
            <a href="#home">HOME</a>
            </li>
            <li>
            <a href="#search">SEARCH</a>
            </li>
            <li>
            <a href="#popular">POPULAR PACKGES</a>
            </li>
            <li>
            <a href="#ourteam">OUR TEAM</a>
            </li>
            <li>
            <a href="#gallery">GALLERY</a>
            </li>
            <li>
            <a href="#contact">CONTACT</a>
            </li>
            <li>
            <a href="logout.php">LOGOUT<?php 
                session_start(); ?></a>
            </li>
        </ul>