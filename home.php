<?php
/*
 * Template name: home
 */
?>

<?php get_header(); ?>
  <div id="content">
    <?php get_template_part( 'parts/content', 'hero' ); ?>
    <div id="inner-content" class="row">
      <?php get_sidebar(); ?>
      
      <main id="main" class="columns medium-8 medium-pull-4 large-9 large-pull-3" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php get_template_part( 'parts/loop', 'single' ); ?>          
        <?php endwhile; else : ?>
          <?php get_template_part( 'parts/content', 'missing' ); ?>
        <?php endif; ?>
      </main>
    </div> <!-- end #inner-content -->
  </div> <!-- end #content -->
<?php get_footer(); ?>