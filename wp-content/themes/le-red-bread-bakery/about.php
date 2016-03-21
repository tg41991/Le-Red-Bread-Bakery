<?php

/*
Template Name: About Page
*/

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="container">
        <div class="about-header">
          <h1>Learn About Our Team and Culture</h1>
          <?php echo CFS()->get('tagline'); ?>
        </div>
        <hr class="decorative"/>
        <div class="about-us-content">
          <div class="about-us-blocks">
            <div class="about-us-block">
              <img src="<?php bloginfo('template_directory'); ?> /images/team.jpg" alt="Le Red Bread Team"/>
              <h3>Le Red Bread Team</h3>
              <p class="tagline">Baking up a storm everyday.</p>
              <?php echo CFS()->get('team_copy'); ?>
            </div>

            <div class="about-us-block">
              <img src="<?php bloginfo('template_directory'); ?> /images/bakery.jpg" alt="Le Red Bread Bakery"/>
              <h3>Le Red Bread Bakery</h3>
              <p class="tagline">A home away from home.</p>
              <?php echo CFS()->get('bakery_copy'); ?>
            </div>
          </div>

          <h2>Our Story</h2>
          <?php echo CFS()->get('story_copy'); ?>
        </div>

        <section class="products-page-link container">
  				<p>
  					<span>Feel free to contact us with any questions coments or suggestions. We even take custom orders!</span>
  					<a href="<?php bloginfo('url')?>/contact/" class="btn">Contact Us</a>
  				</p>
  			</section>
      </div>
    </main>
  </div>

<?php get_footer(); ?>
