<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
  <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
              
    <header class="article-header">
      <div class="row">
        <div class="columns small-12">
          <h1 class="page-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
        </div>
      </div>
    </header> <!-- end article header -->
            
      <section class="entry-content" itemprop="articleBody">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </section> <!-- end article section -->
              
    <footer class="article-footer">
      
    </footer> <!-- end article footer -->
                  
    <?php comments_template(); ?>
            
  </article> <!-- end article -->
  
<?php endwhile; endif; ?>
