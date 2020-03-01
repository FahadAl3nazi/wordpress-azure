<?php $redux_ThemeTek = get_option( 'redux_ThemeTek' ); ?>
</div>
<footer id="footer" class="<?php if (isset($redux_ThemeTek['tek-footer-fixed'])) { if ($redux_ThemeTek['tek-footer-fixed'] == '1') { echo esc_html('fixed'); } else { echo esc_html('classic');} } ?>">
      <?php get_sidebar( 'footer' ); ?>
      <div class="lower-footer">
          <div class="container">
             <div class="pull-left">
               <span>
                 <?php if (isset($redux_ThemeTek['tek-footer-text'])) {
                   echo wp_specialchars_decode(esc_html($redux_ThemeTek['tek-footer-text']));
                 } else {
                   echo esc_html('LeadEngine by KeyDesign. All rights reserved.');
                 } ?>
               </span>
            </div>
            <div class="pull-right">
               <?php if ( has_nav_menu( 'footer-menu' ) ) {
                   wp_nav_menu( array( 'theme_location' => 'footer-menu', 'depth' => 1, 'container' => false, 'menu_class' => 'navbar-footer', 'fallback_cb' => 'false' ) );
                } ?>
            </div>
         </div>
      </div>
</footer>
<?php /* Back to top button template */ ?>
<?php if (isset($redux_ThemeTek['tek-backtotop']) && $redux_ThemeTek['tek-backtotop'] == "1") : ?>
      <div class="back-to-top">
         <i class="fa fa-angle-up"></i>
      </div>
<?php endif; ?>
<?php /* END Back to top button template */ ?>

<?php /* Contact Modal template */ ?>
<?php if (isset($redux_ThemeTek['tek-header-button'])) : ?>
  <?php if ($redux_ThemeTek['tek-header-button'] && ($redux_ThemeTek['tek-header-button-action'] == '1')) : ?>
    <?php get_template_part( 'core/templates/header/content', 'contact-modal' ); ?>
  <?php endif; ?>
<?php endif; ?>
<?php /* END Contact Modal template */ ?>
<?php wp_footer(); ?>
</body>
</html>
