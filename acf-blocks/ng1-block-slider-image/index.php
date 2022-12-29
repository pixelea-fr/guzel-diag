<?php

/**
 * name : ng1-block-slider-image
 * title : Slider Image
 * align : wide
 * description : Slider d'image
 * category : ng1-blocks
 * keywords: ['ng1', 'block','slider-image']
 * withoutContainer : true
 * withoutWrapper : true
 * icon : images-alt2
 * withCss : true
 * withJs : true
 */
wp_enqueue_style('slick');
wp_enqueue_style('slick-theme');
wp_enqueue_script('slick-js');
$fields = get_fields();
?>
<div class="slider-image-section">
    <?php
    $images = get_field('slider_image');
    $size = 'full';
    if ($images) : ?>
        <ul class="slider-image">
            <?php foreach ($images as $image_id) : ?>
                <li>
                    <?php echo wp_get_attachment_image($image_id, $size); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>