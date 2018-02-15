<?php
//Template Name: Home

?>

<?php get_header(); ?>
<!-- slider area starts here -->

	<?php if(have_posts()):
                      while(have_posts()):the_post();?>
    <?php the_content(); ?> 
	<section class="slider_wrapper gardener-banner">
	
	
		<article class="boxedcontainer"> 
			<!--
		#################################
			- THEMEPUNCH BANNER -
		#################################
		-->
	
		<div class="tp-banner-container">
			<div class="tp-banner" >
				<ul>	<!-- SLIDE  -->				
							
				
						<?php //putRevSlider('garden', 'homepage'); ?>
						
                    
				</ul>
				<div class="tp-bannertimer"></div>
			</div>
		</div>
		</article>
	
	</section>
		
	

	
	
	<!-- google map area -->
	<div class="container-fluid google-map-area"> 
		<div class="contact-map">
			<div class="w3-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d16868.24483791451!2d90.43156479027004!3d23.81786269287474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1494875095239" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	
	<!-- #newletter subscription -->
	<section id="news-letter-area" class="newsletter-section-bg">
		<div class="container">
			<div class="row">

				<div class="news-letter-text col-lg-6 col-md-6 col-sm-6 wow fadeInLeft"> 
					<h4>news <span>letters</span></h4>					
					<p>Lorem ipsum dolor sit amet, consect etur adipiscing elit</p>
				</div>
				<div class="mail-subscription col-lg-6 col-md-6 col-sm-6 wow fadeInRight"> 
					<form action="">
					<?php es_subbox( $desc = "", $group = "" ); ?>											
					</form>
				</div>
			</div>
		</div>
	</section>
	   <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
           ?>
	
<?php get_footer(); ?>