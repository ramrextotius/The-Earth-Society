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

  <div class="footer-column" style="width: 20%;">
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
  <div class="footer-column" style="width: 20%;">
  <?php
  
  if ($footer_description) {
    ?>
    <div class="description-footer"><?php echo $footer_description; ?>
  </div>
    <?php
  } else {
      
      echo '<span class="site-name">Lorem Ipsum Sit Amet</span>';
  }
  ?>
  </div>
  <div class="footer-column" style="width: 60%;">
  <?php
        if (has_nav_menu('menu-1')) {
    $args = array(
        'theme_location'  => 'menu-1',
        'items_wrap'      => '<ul class="navbar-menu-footer">%3$s</ul>',
       
        
    );

    // Output the menu
    wp_nav_menu($args);
}
?>

    <div class="social-media-icons">
      <!-- Insert social media icons here -->
  
      <!-- Add more social media icons as needed -->
    </div>
    <div class="info-footer">
    <div class="copyright">
      &copy; 2024 Your Website Name
    </div>
    <div class="address">
      123 Main Street, City, Country
    </div>
</div>
    <div class="menu">
      <ul>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Privacy Policy</a></li>
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
