<?php

$pre_text = get_field('header_pre_text');
$post_text = get_field('header_post_text');
$description = get_field('header_description');

$id = 'h1-description-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'h1-description';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
<div class="h1-text">
    <h1/><span class="pre-text"><?php echo $pre_text . " "; ?></span> <span class="post-text"><?php echo $post_text; ?></span></h1>
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
<div class="text-description">
    <?php echo $description; ?>
</div>
</div>
