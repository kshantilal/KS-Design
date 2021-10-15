<!DOCTYPE html>
<html lang="en-nz" dir='ltr'>
<header role="banner">
    <head>
        <meta charset="<?php bloginfo('charset')?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>KS Design</title>
        <link rel="shortcut icon" type="image/png" href=""/>
        <?php wp_head();?>
        <script src="https://kit.fontawesome.com/edcfecaa0e.js" crossorigin="anonymous"></script>
    </head>
<?php

// Checks if there is a front-page.php. if there is use it as the homepage
if( is_front_page() ){
    $bodyClass = array('my-body', 'front-page');

}else {
    $bodyClass = array('my-body');
}
?>
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
                <span class="navbar-toggler-icon"><i class="fas fa-hamburger fa-2x"></i></span>
            </button>
            <?php bootstrap_nav(); ?>
        </div>
    </div>
</nav>
<?php else:?>
    <nav id="project-nav" class="navbar fixed-top navbar-expand-sm navbar-dark" role="navigation" aria-label="Secondary Navigation">
    <div class="container d-flex flex-grow-1">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="nav-brand" href="/portfolio/">
            <img id="logo" src="<?php echo get_template_directory_uri() . '/public/img/Design Logo.png'?>" alt="">
        </a>
        <div class="text-right">
            <button id="nav-icon" class="custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="navbar-toggler-icon"><i class="fas fa-hamburger fa-2x"></i></span>
            </button>
            <?php bootstrap_nav_product(); ?>
        </div>
    </div>
</nav>
<?php endif;?>



</header>
<body>
    <main role="main">