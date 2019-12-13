<?php wp_enqueue_style( 'header', get_template_directory_uri() . '/template-parts/header/style.css' ); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="<?php bloginfo("description")?>">
        <title><?php bloginfo("name")?></title>
        <!-- TO-DO maybe not needed -->
        <?php wp_head(); ?>
    </head>
    <body>
        <!-- Must be editable with php -->
        <div class='video-container'>
            <video autoplay muted loop id='videoHeader' class='header-full'>
            <source src="<?php echo get_template_directory_uri() . '../media/videos/puertoVentura1min.mp4' ?>" type="video/mp4">
            </video>
        <header class="container-fluid d-flex flex-wrap align-content-between">
            <nav class="row w-100 justify-content-center">
                <ul class="d-flex justify-content-around w-100 p-0 m-0">
                    <li><a href="institucional.html">Quem Somos</a></li>
                    <li><a href="lancamentos.html">Lançamentos</a></li>
                    <li>
                        <a href="index.html" rel="noopener noreferrer">
                            <img class='logo' src="<?php echo get_template_directory_uri() . '/media/images/logo-everest.png' ?>" alt="Construtora Everest">
                        </a>
                    </li>
                    <li><a href="construcao.html">Em Construção</a></li>
                    <li><a href="http://">Avulsos</a></li>
                </ul>
            </nav>
            <!-- Must be editable with php -->
            <div class="row w-100 justify-content-center">
            <a href="">
                <button class='call-to-action'>Conheça</i></button>
                </a>
            </div>
        </header>
        </div>
