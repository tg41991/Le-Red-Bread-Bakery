<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<div class="container">
				<header class="grid-page-header">
					<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
					<p class="products-tagline">We are a team of creative and talented individuals who love making delicious treats.</p>
					<hr class="decorative"/>
					<div class="product-types">
						<?php $terms = get_terms('product-type'); ?>
						<?php if (! empty($terms)) : ?>

							<?php foreach ($terms as $term) : ?>
								<div class="single-product-category">
									<img src="<?php echo get_template_directory_uri() . '/images\/' . $term->slug; ?>.png" alt="" />
									<a href="<?php echo get_term_link($term); ?>"><h3><?php echo $term-> name ?></h3></a>
								</div>

							<?php endforeach ?>
						<?php endif ?>
					</div>
					<?php	the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>

				<div class="product-grid">
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="archive-product">
		        <?php if ( has_post_thumbnail() ) : ?>
		          <a href="<?php the_permalink();?>"> <?php the_post_thumbnail( 'medium' ); ?></a>
		        <?php endif; ?>
						<div class="product-info">
			        <span class="product-title"><?php the_title( '<span>', '</span>' ); ?></span>
			        <span class="product-price"><?php echo CFS()->get( 'price' ); ?></span>
						</div>
				 </div>

				<?php endwhile; ?>
			</div> <!---product-grid--->

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
