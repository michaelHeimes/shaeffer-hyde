<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://shaeffer_hyde.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right" id="off-canvas" data-off-canvas>

	<div class="inner">
	
		<?php lacrosse_3d_off_canvas_nav(); ?>
				
	</div>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>

</div>
