<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="site-banner">
				<span class="banner-text">Baked to Perfection</span>
			</section>
			<section class="products container">
				<div class="product-categories">
						<?php
							$terms = get_terms('product-type');
						?>

						<?php if (! empty($terms)) : ?>

							<?php foreach ($terms as $term) : ?>
								<div class="single-product-category">
									<img src="<?php echo get_template_directory_uri() . '/images\/' . $term->slug; ?>.png" alt="" />
									<h3><?php echo $term-> name ?></h3>
									<p>
										<?php echo $term-> description ?><a href="<?php echo get_term_link($term); ?>">See More...</a>
									</p>
								</div>

						<?php endforeach ?>

					<?php endif ?>
				</div>
			</section>

			<section class="products-page-link container">
				<p>
					<span>All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</span>
					<a href="<?php bloginfo('url')?>/products/" class="btn">See Our Products</a>
				</p>
			</section>

			<section class="latest-posts">
				<div class="container">
					<h2>Our Latest News</h2>

					<hr class="decorative"/>

			      <?php
			        $args= array('post_type'=> 'post', 'posts_per_page' => 4);
			        $newest_posts = get_posts($args);
			      ?>
						<div class="posts-list">
			        <?php foreach($newest_posts as $post) : setup_postdata($post); ?>
			          <?php if (has_post_thumbnail()) : ?>
										<div class="single-latest-posts">
						          <div class="post-image"><?php the_post_thumbnail('large'); ?></div>
						          <?php endif; ?>
											<div class="post-info">
							          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							          <span class="entry-meta">
							            <?php red_starter_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '2 Comments'); ?>
							          </span>
											</div>
										</div>
			        <?php endforeach; 'wp_reset_postdata' ?>
						</div>
				</div>
			</section>
			<section class="testimonials container">
				<div class="container">
					<h2>What Others Say About Us</h2>
					<hr class="decorative"/>
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri() . '/images\/dr-dosist-headshot' ?>.png" alt="Dr Dosist Headshot"/>
							<div class="review">
								<p>Healthy food be damned! If you are a bakery and sweet addict like myself this place is life changing. So many goodies. Have a cheat day and eat all the pretzels!</p>
								<p class="reviewer">Dr. Dosist</p>
								<p class="reviewer-position">Nutritionist - <a href="http://http://www.redacademy.com/">Health Time Clinic</a></p>
							</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri() . '/images\/maxi-milli-headshot' ?>.png" alt="Maxi Milli Headshot"/>
							<div class="review">
								<p>Do you like bread? Seriously, who doesn’t? You have to check Le Red Bread’s lovely loaves. Fresh flavours every day…need I say more?</p>
								<p class="reviewer">Maxi Milli</p>
								<p class="reviewer-position">Chef - <a href="http://http://www.redacademy.com/">Sailor Spoon</a></p>
							</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri() . '/images\/ana-vandana-headshot' ?>.png" alt="Anna Vandana Headshot"/>
							<div class="review">
								<p>Excellent cookies! They always have unique flavours and the cookies are always super fresh. Make sure you get them before they sell out! And keep an eye out on holidays, the flavour combinations they come up with are brilliant. Delicious!</p>
								<p class="reviewer">Anna Vandana</p>
								<p class="reviewer-position">Author - <a href="http://http://www.redacademy.com/">Food Is Great Magazine</a></p>
							</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri() . '/images\/martha-m-masters-headshot' ?>.png" alt="Martha Master Headshot"/>
							<div class="review">
								<p>Where has this bakery been all my life! I absolutely love their cookies and muffins. Nom nom.</p>
								<p class="reviewer">Martha M. Master</p>
								<p class="reviewer-position">Food Critic - <a href="http://http://www.redacademy.com/">WikiTravel</a></p>
							</div>
						</li>
					</ul>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
