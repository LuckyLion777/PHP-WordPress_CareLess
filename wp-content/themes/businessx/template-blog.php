<?php 
/*
	Template Name: Blog
*/
?>

<?php get_header(); ?>
	
	<header id="top-header-<?php the_ID(); ?>" class="grid-wrap page-heading heading-full-width clearfix"<?php businessx_sp_parallax(); ?>>

	<div class="grid-overlay"></div>

    <?php do_action( 'businessx_ppohfw__inner_top' ); ?>

	<div class="sec-hs-elements ta-center">

    	<?php do_action( 'businessx_ppohfw__heading_top' ); ?>

    	<h1 class="hs-primary-large"><?php echo esc_html( the_title() ); ?></h1>

        <?php do_action( 'businessx_ppohfw__heading_bottom' ); ?>

    </div>

    <?php do_action( 'businessx_ppohfw__inner_bottom' ); ?>

	</header>

	<article style="padding: 4.222em 0 3.222em">

		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		<h2 style="text-align: center; margin-bottom: 2em">
			<a href="<?php the_permalink(); ?>" title="Read more" style="margin: 0; width: 100%; background: #033E6A; padding: 0 5px; color: #ffffff;"><?php the_title(); ?></a></h2>
		<p stype="width: 100%; max-width: 69.111em; margin: 0 auto"><?php the_excerpt(); ?></p>
		<!-- <h4 style="text-align: center; margin-bottom: 2em"> -->
		<!-- 	<a title="Read more" style="margin: auto; width: 100%; max-width: 71.111em"><?php the_excerpt(); ?></a> -->

		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</article>

<?php get_footer(); ?>

<!-- <?php get_header(); ?>

	<article>

		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>

		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</article>

<?php get_footer(); ?>

<?php get_header(); ?>

	<article>

		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>

		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

	</article>

<?php get_footer(); ?> -->