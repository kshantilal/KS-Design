<!DOCTYPE html>
<html lang="en-nz" dir='ltr'>
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M4QG39S');</script>
        <!-- End Google Tag Manager -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-X0NKH72GSJ"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-X0NKH72GSJ'); 
        </script>
        <script src="https://kit.fontawesome.com/edcfecaa0e.js" crossorigin="anonymous"></script>
        <title>KS Design</title>
        <meta charset="<?php bloginfo('charset')?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="google-site-verification" content="EyK-FYd-BrFs_KPBOvnCy9A3-gHeBI1Wrdx1G2NZNvg" />
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() . '/public/img/fav-icon/ms-icon-144x144.png' ?>">
        <meta name="theme-color" content="#ffffff">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() . '/public/img/fav-icon/apple-icon-57x57.png' ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() . '/public/img/fav-icon/apple-icon-60x60.png' ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() . '/public/img/fav-icon/apple-icon-72x72.png' ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() . '/public/img/fav-icon/apple-icon-76x76.png' ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() . '/public/img/fav-icon/apple-icon-114x114.png' ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() . '/public/img/fav-icon/apple-icon-120x120.png' ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() . '/public/img/fav-icon/apple-icon-144x144.png' ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() . '/public/img/fav-icon/apple-icon-152x152.png' ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/public/img/fav-icon/apple-icon-180x180.png' ?>">
        <link rel="shortcut icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri() . '/public/img/fav-icon/android-icon-192x192.png' ?>">
        <link rel="shortcut icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/public/img/fav-icon/favicon-32x32.png' ?>">
        <link rel="shortcut icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri() . '/public/img/fav-icon/favicon-96x96.png' ?>">
        <link rel="shortcut icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/public/img/fav-icon/favicon-16x16.png' ?>">
        <link rel="manifest" href="<?php echo get_template_directory_uri() . '/public/img/fav-icon/manifest.json' ?>">
        <?php wp_head();?>
    </head>
<?php

// Checks if there is a front-page.php. if there is use it as the homepage
if( is_front_page() ){
    $bodyClass = array('my-body', 'front-page');

}else {
    $bodyClass = array('my-body');
}
?>
<header role="banner">
    <!-- Add nav here -->
    <?php if(is_front_page()) : ?>
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark" role="navigation" aria-label="Main Navigation">
        <div class="container d-flex flex-grow-1">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="nav-brand" href="#">
                <img id="logo" src="<?php echo get_template_directory_uri() . '/public/img/Design Logo.png'?>" alt="">
            </a>
            <div class="text-right">
                <button id="nav-icon" class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars fa-2x"></i></span>
                </button>
                <?php bootstrap_nav(); ?>
            </div>
        </div>
    </nav>
    <?php else:?>
        <nav id="project-nav" class="navbar fixed-top navbar-expand-sm navbar-dark" role="navigation" aria-label="Secondary Navigation">
        <div class="container d-flex flex-grow-1">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="nav-brand" href="<?php echo esc_url( home_url('/') ); ?>">
                <img id="logo" src="<?php echo get_template_directory_uri() . '/public/img/Design Logo.png'?>" alt="">
            </a>
            <div class="text-right">
                <button id="nav-icon" class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars fa-2x"></i></span>
                </button>
                <?php bootstrap_nav_product(); ?>
            </div>
        </div>
    </nav>
    <?php endif;?>
</header>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4QG39S"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <main role="main">
        