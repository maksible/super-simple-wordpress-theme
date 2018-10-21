<?php
	if(!defined('PATH')) define('PATH','');
?>
<!DOCTYPE html>
<html>
<head>
<title>Home :: ugkcshc.com</title>
<!-- NO NEED SLIDER for now
<link rel="stylesheet" href="<?php echo get_bloginfo( 'template_directory' );?>/css/flexslider.css" type="text/css" media="screen" />
-->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="University Gardens, University, Gardens, Home, Korean, ncba, maksible"/>

<?php wp_head(); ?>
<style>
	 .menucolor{background:#0053a1;}
</style>
</head>
<body>
<?php
	require_once('menu.php');
?>
<!--header-->

<!--content-->
<div class="content" style="background: #fff;">
	<div class="about">
	<div class="container">
		<div class="about-top" style="margin-bottom:0">
			<h1 style="color:#000"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
			<p><?php echo get_bloginfo( 'description' ); ?></p>
		</div>
