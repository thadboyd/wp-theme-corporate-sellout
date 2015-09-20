<?php get_header(); ?>    
      <div id="content">
        <div id="inner-content" class="row">
        
          <?php get_sidebar(); ?>
          
          <main id="main" class="columns medium-8 medium-pull-4 large-9 large-pull-3" role="main">
            <nav id="nav-above">
              <div class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">&laquo;</span> %title') ?></div>
              <div class="nav-next"><?php next_post_link('%link', '%title <span class="meta-nav">&raquo;</span>') ?></div>
            </nav>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php get_template_part( 'parts/loop', 'single' ); ?>
            <?php endwhile; else : ?>
              <?php get_template_part( 'parts/content', 'missing' ); ?>
            <?php endif; ?>
            <nav id="nav-below">
              <div class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">&laquo;</span> %title') ?></div>
              <div class="nav-next"><?php next_post_link('%link', '%title <span class="meta-nav">&raquo;</span>') ?></div>
            </nav>
          </main>
        </div> <!-- end #inner-content -->
      </div> <!-- end #content -->
<?php get_footer(); ?>