<div class="show-for-medium-up">
    
  <!-- If you want to use the more traditional "fixed" navigation.
   simply replace "sticky" with "fixed" -->

  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
        <span id="siteTitle" class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
      </li>
    </ul>    
    <section class="top-bar-section">
      <?php joints_top_nav(); ?>
    </section>
  </nav>
</div>

<div class="show-for-small-only">
    <nav class="tab-bar">
      <section class="middle tab-bar-section">
        <h1 class="title"><?php bloginfo('name'); ?></h1>
      </section>
      <section class="right-small">
        <a href="#" class="right-off-canvas-toggle menu-icon" ><span></span></a>
      </section>
    </nav>
</div>
            
<aside class="right-off-canvas-menu show-for-small-only">
  <ul class="off-canvas-list">
    <li><label>Sidebar</label></li>
      <?php get_sidebar('offcanvas'); ?>   
  </ul>
</aside>

      
<a class="exit-off-canvas"></a>