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
<nav role="navigation" aria-label="Main Navigation">
    
</nav>
<!-- Add nav here -->

</header>
<body>
    <main role="main">
    

<?php










?>