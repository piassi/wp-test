<?php

namespace App\Hooks;

use SolidPress\Core\Hook;

class ImagesSizes extends Hook
{
	public function __construct()
	{
		$this->add_action('after_setup_theme', 'images_sizes');
	}

	public function images_sizes(): void
	{
		// SQUARE
		// add_image_size( 'SIZE_120_120', 120, 120, true );
		// add_image_size( 'SIZE_768_768', 768, 768, true );

		// HORIZONTAL
		add_image_size('SIZE_890_350', 890, 350, true);

		// VERTICAL
		// add_image_size( 'SIZE_360_768', 360, 768, true );
	}
}