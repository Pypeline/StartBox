<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/includes/scripts/html5.js" type="text/javascript"></script>
	<![endif]-->

	<!-- BEGIN wp_head() -->
	<?php wp_head(); ?>
	<!-- END wp_head() -->
</head>

<body <?php body_class(); ?>>
<?php do_action( 'before' ); ?>
<div id="wrap" class="hfeed">

	<?php do_action( 'before_header' ); ?>

	<?php if ( has_action( 'header' ) ) { ?>
		<header id="header" class="site-header" role="banner">
			<?php do_action( 'header' ); ?>
		</header><!-- #header .site-header -->
	<?php } ?>

	<?php do_action( 'after_header' ); ?>

	<div id="container_wrap">
		<?php do_action( 'before_container' ); ?>