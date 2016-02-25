<?php get_header(); ?>

	<main class="site-content posts-index" role="main">
		
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<?php 
						while ( have_posts() ) : the_post();
						$img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
						$date = strtotime(get_field('date'));
					?>
					<article class="post">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="head">
								<img src="<?php echo $img_url; ?>" alt="Alt">
							</div>
			      <?php endif; ?>
						<div class="body">
							<div class="left">
								<div class="date">
									<h3><?php the_time('j'); ?></h3>
									<small><?php the_time('M'); ?></small>
								</div>
								<div class="time">
									<h6><?php the_time('G:i'); ?></h6>
									<small>HRS</small>
								</div>
							</div>
							<div class="right">
								<div class="top">
									<div class="title">
										<h2><?php the_title(); ?></h2>
										<nav>
											<small><strong><?php _e('Posted by', 'posted-by'); ?></strong>: <?php the_author(); ?></small>
											<span> · </span>
											<a href="#"><small><?php the_category(' '); ?></small></a>
										</nav>
									</div>
								</div>
								<div class="center">
									<div class="excerpt">
										<?php the_excerpt(); ?>
									</div>
									<div class="content">
										<?php the_content(); ?>
									</div>
								</div>
								<div class="bottom text-right">
									<section class="row team-wrapper">
										<article class="team-item">
											<div>
												<div class="team-item-pic" style="background-image: url(<?php echo get_template_directory_uri(); ?>/app/assets/img/profile_Gus.jpg)"></div>
												<div class="team-item-content">
													<div class="head">
														<small class="uppercase"><?php _e('Posted by', 'posted-by'); ?></small>
														<h5 class="mt-7"><?php the_author(); ?></h5>
														<small><?php the_author_meta('nickname'); ?> </small>
													</div>
													<p><?php the_author_meta('description'); ?></p>
												</div>
											</div>
										</article>
									</section>
								</div>
							</div>
						</div>
					</article>

					<?php endwhile; wp_reset_query(); ?>	
				</div>
				<div class="col-sm-5">
					
				</div>
			</div>
		</div>

	</main>

<?php get_footer(); ?>