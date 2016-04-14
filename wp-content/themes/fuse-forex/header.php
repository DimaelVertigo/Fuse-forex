<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fuse_Forex
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if (is_front_page()){?>
<header class="site-header">
	<a href="<?php echo home_url(); ?>" class="logo site-header__logo"></a>
	<div class="site-header__video">
		<iframe width="100%" height="100%" src="https://www.youtube.com/embed/yFWugqVZXsM" frameborder="0" allowfullscreen></iframe>
	</div>
	<a href="#" class="anchor site-header__anchor"></a>
</header>

<?php } elseif (is_page(24)){?>
<header class="site-header">
	<a href="<?php echo home_url(); ?>" class="logo site-header__logo"></a>
	<div class="site-header__video">
		<iframe width="100%" height="100%" src="https://www.youtube.com/embed/yFWugqVZXsM" frameborder="0" allowfullscreen></iframe>
	</div>
	<a href="#" class="anchor site-header__anchor"></a>
</header>

<?php } else {?>
<header class="post-header">
	<a href="<?php echo home_url(); ?>" class="logo post-header__logo"></a>
</header>
<?php } ?>
