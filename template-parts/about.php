<?php
//Template Name: About

?>

<?php get_header();?>
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
	
	<?php if(have_posts()):
                      while(have_posts()):the_post();?>
                      
                      
        <?php the_content(); ?> 
    
    
	 <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
           ?>
	
<?php get_footer();?>