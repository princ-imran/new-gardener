<?php get_header(); ?>


<section id="breadcrumb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-title text-center">
                    	
						<?php if(function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb(); ?>
					</div> <!-- /.page-breadcumb -->
				</div>
			</div>
		</div>
	</section> <!-- /#page-title -->

<?php
while (have_posts() ) : the_post();
	
	get_template_part( 'template-parts/content', 'page' );
	// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

endwhile;

?>


<div id="gardener-blogs-content">
	<div class="container">
	<div class="row">
<?php 
while ( have_posts() ) : the_post();
        
        

get_template_part('template-parts/page/content','page');
	
endwhile;
?>
    </div>
</div>
</div>


<?php get_footer();
?>
<?php get_footer();