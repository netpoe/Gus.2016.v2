<?php 
	$args = array(
		'category_name' => 'portfolio',
		'orderby' => 'date',
		'order'   => 'ASC',
		);
	$query = new WP_Query( $args );
	$count = 0;
	while( $query->have_posts() ) : $query->the_post();
	$count++;
	$post_tags = get_the_tags();
	$next_post = get_adjacent_post(false, '', false);
?>

	<section id="<?php echo $post->post_name; ?>" class="bg-gray-lightest fh-section">
		<div class="content-block flex-column-center">
			<header>
				<h6><?php _e('Project', 'title-project'); ?></h6>
			</header>
			<div class="container-sm">
				<article>
					<div class="top">
						<h3><a href="<?php the_field('link'); ?>" target="_blank"><?php the_title(); ?></a></h3>
						<nav>
							<span hover-text="<?php _e('Total Delivery Time', 'title-total-delivery-time'); ?>">TDT: <?php the_field('tdt'); ?> hrs</span>
							<?php if ( get_field('github_link') ) : ?>
							<span> · </span>
							<a href="<?php the_field('github_link'); ?>"><?php _e('See on GitHub', 'action-see-on-github'); ?></a>
							<?php endif; ?>
						</nav>
					</div>
					<div class="center">
						<?php the_content(); ?>
					</div>
					<div class="row bottom">
						<div class="col-sm-8 left">
							<small><?php _e('Technologies', 'title-technologies'); ?></small>
							<ul>
								<?php if ($post_tags) : foreach($post_tags as $tag) : ?>
								<li><?php echo $tag->name . ' '; ?></li>
								<?php endforeach; endif; ?>
							</ul>
						</div>
						<div class="col-sm-4 right">
							<a href="<?php the_field('link'); ?>" target="_blank" class="btn btn-secondary"><?php _e('See project', 'action-see-project'); ?></a>
						</div>
					</div>
				</article>
			</div>
		</div>
		<?php if (!empty($next_post)) : ?>
		<a href="#<?php echo $next_post->post_name; ?>" class="scroll-down"></a>
		<?php endif; ?>
	</section>

	<?php if ($count == 3) : ?>
		<?php get_template_part('section', 'call-to-action'); ?>
	<?php endif; ?>

<?php endwhile; wp_reset_query(); ?>