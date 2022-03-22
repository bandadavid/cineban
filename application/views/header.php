<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineBan</title>

    <!-- STYLES -->
    <link href="<?php echo base_url(); ?>/assets/template/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    <!-- SCRIPTS -->

    <script src="<?php echo base_url(); ?>/assets/librerias/jquery/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/template/js/custom.js"></script>

</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="<?php echo base_url(); ?>/assets/images/logocine.jpg" alt="logo_principal">
                    <h2>CINEBAN</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>


            <div class="sidebar">
                <a href="<?php echo base_url() ?>" class="active">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Panel</h3>
                </a>
                <a href="<?php echo site_url('peliculas/index'); ?>">
                    <span class="material-icons-sharp">
                        movie
                    </span>
                    <h3>Buscar Peliculas</h3>
                </a>
                <a href="<?php echo site_url('series/index'); ?>">
                    <span class="material-icons-sharp">
                        theaters
                    </span>
                    <h3>Buscar Series</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">sticky_note_2</span>
                    <h3>Noticias Actuales</h3>
                    <span class="message-count">26</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Salir</h3>
                </a>
            </div>
        </aside>

        <main>