<?php
/**
 * The Header for the theme
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php
	$icon_144 = ot_get_option( 'icon_144' );
	$icon_114 = ot_get_option( 'icon_114' );
	$icon_72 = ot_get_option( 'icon_72' );
	$icon_57 = ot_get_option( 'icon_57' );
?>

<!DOCTYPE html>
<!--[if lt IE 8]><html class="no-js oldie" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- SEO Meta Data -->
		<title>David Roach Design | <?php the_title(); ?></title>
		<meta name="author" content="">
		<meta name="copyright" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">

		<!-- Icons -->
		<?php if ( $icon_144 ){ ?>
        	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $icon_144; ?>">
        <?php } ?>
		<?php if ( $icon_114 ){ ?>
        	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $icon_114; ?>">
        <?php } ?>
			<?php if ( $icon_72 ){ ?>
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $icon_72; ?>">
        	<?php } ?>
		<?php if ( $icon_57 ){ ?>
        	<link rel="apple-touch-icon-precomposed" href="<?php echo $icon_57; ?>">
        <?php } ?>
		<?php if ( $icon_57 ){ ?>
			<link rel="shortcut icon" href="<?php echo $icon_57; ?>">
        <?php } ?>

		<!-- Windows Tile -->
        <meta name="msapplication-TileImage" content="apple-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#222222">

        <!-- Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Bitter:400,700">

		<!-- Stylesheets -->
		<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">

		<!-- Libraries -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendors/jquery-2.0.3.min.js"><\/script>')</script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/vendors/modernizr-2.6.2.js"></script>
	</head>

	<?php
		$background_image = ot_get_option( 'background_image' );
		$logo = ot_get_option( 'logo' );
	?>

	<body style="background: url(<?php echo $background_image; ?>) no-repeat center top #fff; background-size: cover;">
		<nav id="nav">
			<div class="container">
				<ul class="menu">
					<li class="logo">
						<a href="/">
							<img src="<?php echo $logo; ?>" alt="">
						</a>
					</li>
					<?php
						$posts = get_posts( 'post_type="page"&amp;post_status="publish"&amp;numberposts=99999&amp;orderby=menu_order' );
						$pages = get_page_hierarchy( $posts );
						$pages = array_keys( $pages );
						$current = array_search($post -> ID, $pages );
						$prevID = $pages[ $current+1 ];
						$nextID = $pages[ $current-1 ];
					?>
					<?php
						if (!empty($prevID)) {
					?>
						<li><a href="<?php echo get_permalink( $prevID ); ?>"><span class="icon-arrow-right"></span></a></li>
					<?php
						}
						if (!empty($nextID)) {
					?>
						<li><a href="<?php echo get_permalink( $nextID ); ?>"><span class="icon-arrow-left"></span></a></li>
					<?php
						}
					?>
					<li class="overview-toggle">
						<a>
							<span>Overview</span>
						</a>
					</li>
				</ul>
				<?php wp_nav_menu( 'Primary' ); ?>
				<ul class="menu">
					<li class="nav-toggle">
						<a>
							<span>+</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>