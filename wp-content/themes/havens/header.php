<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Haven's Charity</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;800&family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Nunito:wght@200;300;400;800&family=Rubik:wght@300&display=swap" rel="stylesheet">
    

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md p-0 navbar-dark" role="navigation">
            <div class="container-fluid nav-wrap">
                <a class="navbar-brand" href="<?= home_url(); ?>">
                    <!-- Logo -->
                    <img width="114" height="60" src="<?php echo get_template_directory_uri()?>/assets/images/haven-logo.svg" alt="Haven's charity">
                </a>
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                        
                    ) );
                ?>
                <a class="btn-haven d-flex justify-content-center align-items-center" href="">Donate Now</a>
            </div>
        </nav>
    </header>

    <main>  