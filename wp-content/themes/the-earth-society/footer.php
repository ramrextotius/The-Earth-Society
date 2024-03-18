<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Earth_Society
 */
$footer_logo_id = get_theme_mod('footer_logo');
$footer_description = get_theme_mod('footer_description');
$logo_url = wp_get_attachment_image_url($footer_logo_id, 'small');
?>

<footer class="the-earth-footer">
	<div class="footer-wrapper">

  <div class="footer-column" id="logo-footer">
  <?php
  
  if ($logo_url) {
    ?>
    <img src="<?php echo $logo_url; ?>" alt="Logo">
    <?php
  } else {
      
      echo '<span class="site-name">' . get_bloginfo('name') . '</span>';
  }
  ?>
  </div>
  <div class="footer-column" id="site-description">
  <?php
  
  if ($footer_description) {
    ?>
    <div class="description-footer"><?php echo $footer_description; ?>
  </div>
    <?php
  } else {
      
      echo '<div class="site-name">Lorem Ipsum Sit Amet</div>';
  }
  ?>
  </div>
  <div class="footer-column" id="menu-footer">
  <?php
        if (has_nav_menu('menu-1')) {
    $args = array(
        'theme_location'  => 'menu-1',
        'items_wrap'      => '<ul class="navbar-menu-footer">%3$s</ul>',
       
        
    );

   
    wp_nav_menu($args);
}
?>

    <div class="social-media-icons">
    </div>
    <div class="info-footer">
    <div class="copyright">
      &copy;2018 Digizent International LLC 
    </div>
    <div class="address">
    1726 E Branch Hollow Dr 
    </div>
    <div class="address-state">
    Carrollton, TX 75007
    </div>
</div>
    <div class="menu">
      <ul>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Share our Site with a Friend</a></li>
      </ul>
    </div>
  </div>
</div>
</footer>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
