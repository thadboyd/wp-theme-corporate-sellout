<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
  <?php edit_post_link(__('Edit'), "<span class=\"edit-link\">\n", "</span>"); ?>
  <section class="entry-content" itemprop="articleBody">
    <?php the_post_thumbnail('full'); ?>
    <?php the_content(); ?>
  </section> <!-- end article section -->
            
  <footer class="article-footer">
    <p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
  </footer> <!-- end article footer -->
                  
  <?php comments_template(); ?>  
                          
</article> <!-- end article -->