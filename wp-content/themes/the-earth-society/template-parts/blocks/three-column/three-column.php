<?php

$image1 = get_field('image_1');
$image_url1 = wp_get_attachment_image_url($image1, 'full');
$first_block_description = get_field('first_block_description');
$first_block_title = get_field('first_block_title');

$image2 = get_field('image_2');
$image_url2 = wp_get_attachment_image_url($image2, 'full');
$second_block_description = get_field('second_block_description');
$second_block_title = get_field('second_block_title');

$image3 = get_field('image_3');
$image_url3 = wp_get_attachment_image_url($image3, 'full');
$third_block_description = get_field('third_block_description');
$third_block_title = get_field('third_block_title');


$id = 'three-column-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$className = 'three-column-block-wrapper';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


?>

<div class="three-columns-wrapper">
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="block">
        <div class="img-block">
            <img src="<?php echo $image_url1; ?>"/>
            <div class="gray-frame"></div>
        </div>
        <div>
            <div class="block-description">
                <?php echo $first_block_description; ?>
            </div>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/rectangle-left.png"/>
            <div class="block-title">
                <?php echo $first_block_title; ?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-read-more.png"/>
            </div>
        </div>
    </div>

    <div class="block">
        <div class="img-block">
            <img src="<?php echo $image_url2; ?>"/>
            <div class="gray-frame"></div>
        </div>
        <div>
            <div class="block-description">
                <?php echo $second_block_description; ?>
            </div>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/rectangle-right.png"/>
            <div class="block-title">
                <?php echo $second_block_title; ?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-read-more.png"/>
            </div>
        </div>
    </div>

    <div class="block">
        <div class="img-block">
            <img src="<?php echo $image_url3; ?>"/>
            <div class="gray-frame"></div>
        </div>
        <div>
            <div class="block-description">
                <?php echo $third_block_description; ?>
            </div>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/rectangle-left.png"/>
            <div class="block-title">
                <?php echo $third_block_title; ?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-read-more.png"/>
            </div>
        </div>
    </div>
</div>
</div>
