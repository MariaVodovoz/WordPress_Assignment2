<?php
/**
 * The header
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- custom CSS file -->
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( home_url( 'wp-content/themes/assignmentone/assets/css/custom-style.css' ) );?>" />
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Potta+One&family=Ultra&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<!-- logo place  -->
		<article class='logo'>
			<a href="<?php echo esc_url( home_url() );?>">
				<img src="<?php echo esc_url( home_url( 'wp-content/uploads/2021/04/logoPet.png' ) );?>" alt="my logo">
			</a>
		</article>
		<!-- main navigation -->
		<nav>
			<?php
				wp_nav_menu(array(
					'menu' => 'main', 
					'theme_location' => '', //  leave this empty
					'depth' => 3, // 
					'fallback_cb' => false //  just set to false
				));
			?>
		</nav>
	</header>
