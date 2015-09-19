<div id="sidebar-full" class="hide-for-small sidebar columns medium-4 medium-push-8 large-3 large-push-9" role="complementary">
  <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar1' ); ?>
  <?php else : ?>

  <!-- This content shows up if there are no widgets defined in the backend. -->
            
  <div class="alert help">
    <p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
  </div>

  <?php endif; ?>

</div>