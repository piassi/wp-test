<?php
/**
 * FrontPage template file
 *
 * @see Theme\Components\FrontPage
 *
 * @package piassi
 */

use Theme\Components;
?>

<div id="front-page" class="page">
    <?php
		echo new Components\Hero( $hero );

		echo new Components\About( $about );

		echo new Components\Gallery( array( 'gallery' => $gallery ) );

		echo new Components\Services( $services );

		echo new Components\Testimonials( $testimonials );

		echo new Components\Clients( $clients );

		echo new Components\Contact( $contact );
	?>
</div>