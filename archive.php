<?php get_header(); ?>
      <div id="content">      
        <div id="inner-content" class="row">
            <?php get_sidebar(); ?>
            
            <main id="main" class="columns medium-8 medium-pull-4 large-9 large-pull-3" role="main">
              <header>
                <h1 class="page-title"><?php the_archive_title();?></h1>
                <?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
              </header>
        
              <!-- To see additional archive styles, visit the /parts directory -->
              <?php get_template_part( 'parts/loop', 'archive' ); ?>          
      
            </main> <!-- end #main -->    
        </div> <!-- end #inner-content -->
      </div> <!-- end #content -->
<?php get_footer(); ?>