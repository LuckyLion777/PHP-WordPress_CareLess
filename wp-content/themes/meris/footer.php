<!--Footer-->
		<footer>
			<div class="container text-center">
				<div class="site-sns">
                <?php 
				
				for($i=0;$i<9; $i++){
					$social_icon = esc_attr(meris_options_array('social_icon_'.$i));
					$social_link = esc_url(meris_options_array('social_link_'.$i));
					if($social_link !=""){
						$social_icon = ($social_icon == "fa fa-digg" ? "fa fa-envelope":$social_icon);		
					echo '<a href="'.$social_link.'" target="_blank"><i class="'.$social_icon.'"></i></a>';
					}
					}
					?>
					
				</div>
				<div class="site-info">
					&copy; <?php echo get_the_time("Y").' '; printf(__(bloginfo('name').' '.get_bloginfo( 'description' ).'</br>Developed by <a href="%s">NewmediaIX Corp.</a>','nix'),esc_url('http://www.newmediaix.com/'));?>
				</div>
			</div>
		</footer>
	</div>	
    <?php wp_footer();?>
</body>
</html>