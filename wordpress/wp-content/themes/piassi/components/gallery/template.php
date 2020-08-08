<?php
/**
 * Gallery template file
 *
 * @see Theme\Components\Gallery
 *
 * @package piassi
 */

use Theme\Helpers\Utils;

if ( ! $gallery ) {
	return '';
}
?>

<div class="container" id="portfolio">
    <section class="_gallery mt-10 <?php echo $class; ?>">
        <?php foreach ( $gallery as $image ) : ?>
        <a href="<?php echo $image['url']; ?>" data-lightbox="gallery">
            <img
                class="lozad"
                src="<?php echo Utils::image_placeholder(); ?>"
                data-src="<?php echo $image['sizes']['SIZE_680_380']; ?>"
                alt="">
        </a>
        <?php endforeach; ?>
    </section>
</div>