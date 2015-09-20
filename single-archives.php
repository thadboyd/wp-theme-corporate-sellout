<?php
/* Template name: archives
*/
?>

<?php get_header(); ?>
  <div id="content">
    <div id="inner-content" class="row">      
      <main id="main" class="columns small-12" role="main">
        <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
          <header class="article-header">
            <div class="row">
              <div class="columns medium-6 large-9">  
                <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
              </div>
              <div class="columns medium-6 large-3 right">
                <?php get_search_form(); ?>
              </div>
            </div>
          </header> <!-- end article header -->
          
          <div class="row">
            <div class="columns medium-4">
              <h2>By Month:</h2>
              <ul>
                <?php wp_get_archives('type=monthly'); ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <li><?php get_template_part( 'parts/loop', 'single-nohead' ); ?></li>
                <?php endif; ?>
              </ul>
            </div>
            
            <div class="columns medium-4">
              <h2>By Category:</h2>
              <ul>
                <?php wp_list_categories("title_li="); ?>
              </ul>
            </div>
            
            <div class="columns medium-4">
              <h2>By Tag:</h2>
              <?php wp_tag_cloud(); ?>
            </div>
          </div>
        </article>
      </main>
    </div> <!-- end #inner-content -->
  </div> <!-- end #content -->
<?php get_footer(); ?>