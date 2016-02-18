<?php $first_post_slug; ?>
<section id="portfolio" class="bg-gray-lightest fh-section">
	<div class="container-sm content-block flex-column-center">
		<header>
			<h6><?php _e('Portfolio', 'title-portfolio'); ?></h6>
		</header>
		<ul class="list-unstyled text-center mr-ch-7">
			<?php 
				$args = array(
					'category_name' => 'portfolio',
					'orderby' => 'date',
					'order'   => 'ASC',
					'posts_per_page' => -1,
					);
				$query = new WP_Query( $args );
				$count = 0;
				while( $query->have_posts() ) : $query->the_post();
				$count++;
				if ($count == 1) { $first_post_slug = $post->post_name; }
			?>
			<li class="inline-block"><a href="#<?php echo $post->post_name;?>"><?php the_title(); ?></a></li>
			<?php endwhile; wp_reset_query(); ?>
		</ul>
	</div>
	<a href="#<?php echo $first_post_slug; ?>" class="scroll-down"></a>
</section>