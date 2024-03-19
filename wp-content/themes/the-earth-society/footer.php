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

<<<<<<< HEAD
  <div class="footer-column" id="logo-footer">
=======
<<<<<<< HEAD
  <div class="footer-column" id="logo-footer">
=======
  <div class="footer-column" style="width: 20%;">
>>>>>>> 3df3d29e915511f433e7c3ad5b47773396224a7d
>>>>>>> 7691b61ff864a57361e9dcad75642642cb8b2d1b
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
<<<<<<< HEAD
  <div class="footer-column" id="site-description">
=======
<<<<<<< HEAD
  <div class="footer-column" id="site-description">
=======
  <div class="footer-column" style="width: 20%;">
>>>>>>> 3df3d29e915511f433e7c3ad5b47773396224a7d
>>>>>>> 7691b61ff864a57361e9dcad75642642cb8b2d1b
  <?php
  
  if ($footer_description) {
    ?>
    <div class="description-footer"><?php echo $footer_description; ?>
  </div>
    <?php
  } else {
      
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 7691b61ff864a57361e9dcad75642642cb8b2d1b
      echo '<div class="site-name">Lorem Ipsum Sit Amet</div>';
  }
  ?>
  </div>
  <div class="footer-column" id="menu-footer">
<<<<<<< HEAD
=======
=======
      echo '<span class="site-name">Lorem Ipsum Sit Amet</span>';
  }
  ?>
  </div>
  <div class="footer-column" style="width: 60%;">
>>>>>>> 3df3d29e915511f433e7c3ad5b47773396224a7d
>>>>>>> 7691b61ff864a57361e9dcad75642642cb8b2d1b
  <?php
        if (has_nav_menu('menu-1')) {
    $args = array(
        'theme_location'  => 'menu-1',
        'items_wrap'      => '<ul class="navbar-menu-footer">%3$s</ul>',
       
        
    );

<<<<<<< HEAD
   
=======
<<<<<<< HEAD
   
=======
    // Output the menu
>>>>>>> 3df3d29e915511f433e7c3ad5b47773396224a7d
>>>>>>> 7691b61ff864a57361e9dcad75642642cb8b2d1b
    wp_nav_menu($args);
}
?>

    <div class="social-media-icons">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 7691b61ff864a57361e9dcad75642642cb8b2d1b
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
<<<<<<< HEAD
=======
=======
      <!-- Insert social media icons here -->
  
      <!-- Add more social media icons as needed -->
    </div>
    <div class="info-footer">
    <div class="copyright">
      &copy; 2024 Your Website Name
    </div>
    <div class="address">
      123 Main Street, City, Country
>>>>>>> 3df3d29e915511f433e7c3ad5b47773396224a7d
>>>>>>> 7691b61ff864a57361e9dcad75642642cb8b2d1b
    </div>
</div>
    <div class="menu">
      <ul>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Privacy Policy</a></li>
<<<<<<< HEAD
        <li><a href="#">Share our Site with a Friend</a></li>
=======
<<<<<<< HEAD
        <li><a href="#">Share our Site with a Friend</a></li>
=======
>>>>>>> 3df3d29e915511f433e7c3ad5b47773396224a7d
>>>>>>> 7691b61ff864a57361e9dcad75642642cb8b2d1b
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
