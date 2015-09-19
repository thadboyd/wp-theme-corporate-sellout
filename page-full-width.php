<?php
/*
Template Name: Full Width (No Sidebar)
*/
?>

<?php get_header(); ?>      
      <div id="content">      
        <div id="inner-content" class="row">
          <main id="main" class="large-12 medium-12 columns" role="main">
            <?php get_template_part( 'parts/loop', 'page' ); ?>                        
          </main>
        </div> <!-- end #inner-content -->
      </div> <!-- end #content -->
<?php get_footer(); ?>
