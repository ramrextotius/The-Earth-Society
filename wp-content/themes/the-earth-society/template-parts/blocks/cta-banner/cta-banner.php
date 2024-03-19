<?php 

$cta_h1 = get_field('cta_h1');
$cta_text = get_field('cta_text');
$text_button_cta_banner = get_field('text_button_cta_banner');
//$button_color = get_field('button_color');
$background_cta_image = get_field('background_cta');
$image_url = wp_get_attachment_image_url($background_cta_image, 'full');
$cta_button_text = get_field('cta_button_text');
$button_url = get_field('button_url');

$id = 'cta-banner-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'cta-banner-wrapper';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

   <div class="cta-banner-column">
       <div class="cta-h1">
        <?php echo $cta_h1; ?>
       </div>
    <div class="custom-separator-wrapper">
      <div class="rectangle-left">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/rectangle-left.png"/>
    </div>
    <div class="icon-separator">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/shape-separator.png"/>
    </div>
    <div class="rectangle-right">
       <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/rectangle-right.png"/>
    </div>
    </div>
    <div class="cta-description">
    <?php echo $cta_text; ?>
    </div>
    <a href="<?php echo $button_url; ?>"><button class="cta-button"><?php echo $cta_button_text; ?></button></a>
   </div>

</div>
<style>
.cta-banner-wrapper {
    background-image: url('<?php echo $image_url; ?>');
    background-size: cover;
}
</style>