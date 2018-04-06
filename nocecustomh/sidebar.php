<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nocecustomh
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-md-4"><!-- Bootstrap用col-md-4追加 -->
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
