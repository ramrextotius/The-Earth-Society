<?php

/**
 * Hero Section Block Template
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-section-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero-section-wrapper';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


$image = get_field('image_hero')  ?: 295;
$text = get_field('cta_text_hero') ?: 'Your CTA.';
$url = get_field('url_button_hero') ?: '#';
$button_text = get_field('button_text_hero') ?: 'Text Button';
$image_url = wp_get_attachment_image_url($image, 'full');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
<div class="hero-section" style="background-image: url('<?php echo esc_url($image_url); ?>');">
    <div class="container">
        <div class="floating-card-wrapper">
        <div class="floating-card">
<<<<<<< HEAD
        <p>Due to the gradual destruction of their habitat and wars in their limited habitat, the golden monkey is endangered.</p>
             <p><a href="#" class="text-align:center;">Help save the monkeys »</a></p>
=======
        Due to the gradual destruction of their habitat and wars in their limited habitat, the golden monkey is endangered.
             <a href="#" class="text-align:center";>Help save the monkeys »</a>
>>>>>>> 7691b61ff864a57361e9dcad75642642cb8b2d1b
        </div>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/monkey.png" class="monkey"/>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-plus.png" class="plus"/>
        </div>
        <div class="hero-content">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero-icon.png"/>
            <h1><?php echo esc_html($text); ?></h1>
            <a href="<?php echo esc_url($url); ?>" class="button"><?php echo esc_html($button_text); ?></a>
        </div>
        <div class="floating-icon-wrapper">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-flora.png" class="icon-flora" />
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-plus.png" class="plus-bottom"/>
        </div>
    </div>
</div>
</div>
