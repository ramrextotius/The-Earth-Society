<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Earth_Society
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header id="masthead" class="site-header">
		
			
		
		<nav class="navbar">
        <div class="navbar-logo">
        <?php
  
    if (has_custom_logo()) {
        the_custom_logo(); 
    } else {
        
        echo '<span class="site-name">' . get_bloginfo('name') . '</span>';
    }
    ?>
        </div>
		<div class="left-wrapper">
        
            <?php
        if (has_nav_menu('menu-1')) {
    $args = array(
        'theme_location'  => 'menu-1',
        'items_wrap'      => '<ul class="navbar-menu">%3$s</ul>',
       
        
    );


    wp_nav_menu($args);
}
$cta_button_text = get_theme_mod('cta_button_text');
$cta_link = get_theme_mod('cta_link');
?>
           
        <div class="navbar-button">
			
        <a href="<?php echo esc_url($cta_link); ?>" style="text-decoration:none;"><button><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/donate-icon.png" alt="Icon" class="button-icon"><?php echo sanitize_text_field($cta_button_text); ?></button></a>
        </div>
			</div>
    <div class="menu-toggle" id="mobile-menu">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
   
    </nav>
    <?php
    if (has_nav_menu('menu-1')) {
    $args = array(
        'theme_location'  => 'menu-1',
        'items_wrap'      => '<ul class="navbar-menu-mobile">%3$s</ul>',
       
        
    );
    wp_nav_menu($args);
}
    ?>
	</header><!-- #masthead -->
    