	<!-- footer widget strats -->
	<section id="footer-bg">
		<!-- footer -->
		<footer class="gardener widget-section-bg">
			<div class="container">
				<div class="row">
					<!-- .widget -->					
					 <?php 
                        
                        if( ! dynamic_sidebar('footer_1'));
                    ?>		
				</div>
			</div>
		</footer> <!-- /footer -->
		
		<!-- #bottom-bar -->
		<section id="bottom-bar" class="gardener">
			<div class="container">
				<div class="row bottom-border">
					<!-- .copyright -->
					<div class="copyright pull-left">					 
						<p>Copyright &copy; Care <?php echo bloginfo('name'); echo" "; echo date("Y"); echo " All rights reserved. "; ?> </p>
					</div> <!-- /.copyright -->
					<!-- .credit -->
					<div class="credit pull-right">
						<nav class="footer-menu"> 
							<ul>
								<!-- .widget -->					
					 <?php 
                        
                        if( ! dynamic_sidebar('footer_bottom'));
                    ?>	
							</ul>
						</nav>
					</div> <!-- /.credit -->
				</div>
			</div> 
		</section><!-- /#bottom-bar -->
    </section>
	<?php wp_footer();?>
</body>
</html>