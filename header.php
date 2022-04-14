<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Razzi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://blogfonts.com/css/aWQ9NTk1MzYmc3ViPTUzNiZjPWUmdHRmPUV1cGhlbWlhK1VDQVMrQm9sZCsyLjYuNi50dGYmbj1ldXBoZW1pYS11Y2Fz/Euphemia UCAS.ttf" rel="stylesheet" type="text/css"/>
    <link href="https://blogfonts.com/css/aWQ9NTk1MzYmc3ViPTUzNiZjPWUmdHRmPUV1cGhlbWlhK1VDQVMrSXRhbGljKzIuNi42LnR0ZiZuPWV1cGhlbWlhLXVjYXMtMg/Euphemia UCAS.ttf" rel="stylesheet" type="text/css"/>
    <link href="https://blogfonts.com/css/aWQ9NTk1MzYmc3ViPTUzNiZjPWUmdHRmPUV1cGhlbWlhK1VDQVMrUmVndWxhcisyLjYuNi50dGYmbj1ldXBoZW1pYS11Y2FzLTM/Euphemia UCAS.ttf" rel="stylesheet" type="text/css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet"> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php do_action( 'razzi_before_site' ) ?>
<div id="page" class="site">
	<?php do_action('razzi_before_open_site_header'); ?>
	<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {?>
		<header id="site-header" class="<?php \Razzi\Header::classes('site-header'); ?>">
			<?php do_action('razzi_after_open_site_header'); ?>
			<?php do_action('razzi_before_close_site_header'); ?>
		</header>
	<?php } ?>
	<?php do_action('razzi_after_close_site_header'); ?>

	<?php
	\Razzi\Markup::instance()->open( 'site_content', [
		'tag'     => 'div',
		'attr'    => [
			'id'    => 'content',
			'class' => 'site-content'
		],
		'actions' => true,
	] );
	?>