<!DOCTYPE html>
<html>
<head>

	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>KS Design</title>
	<?php wp_head(); ?>


</head>

<?php
	if( is_front_page() ){
		$bodyClass = array('my-body', 'front-page');
	} else {
		$bodyClass = array('my-body');
	}
?>
<body <?php body_class($bodyClass); ?>>
	<div class="container">
