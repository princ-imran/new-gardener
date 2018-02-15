<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Consult
 * @since 1.0
 * @version 1.0
 */

?>

<article>
	<?php the_title(); ?>
	<?php the_content(); ?>

<div class="pagination">
	<?php wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) ); ?>


</div>

</article>