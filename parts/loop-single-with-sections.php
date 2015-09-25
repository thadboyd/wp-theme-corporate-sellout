<header class="article-header">
  <div class="row">
    <div class="columns small-12">  
      <h1 class="entry-title single-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
    </div>
  </div>
  <?php get_template_part( 'parts/content', 'byline' ); ?>
</header> <!-- end article header -->

<div id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
  <section class="entry-content zebra" itemprop="articleBody">
    <?php the_post_thumbnail('full'); ?>
    <?php the_content(); ?>
  </section> <!-- end article section -->
            
  <footer class="article-footer">
    <p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
  </footer> <!-- end article footer -->
                  
  <?php comments_template(); ?>  
                          
</div> <!-- end article -->