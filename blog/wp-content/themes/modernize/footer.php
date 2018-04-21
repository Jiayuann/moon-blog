<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package modernize
 * @author Takuma Misumi
 * @link http://blog.mismithportfolio.com/
 * @license GPLv2 or later
 */

?>

  </div><!-- #content -->

  <footer id="colophon" class="footer" role="contentinfo">

    <?php if ( has_nav_menu( 'social' ) ) : ?>
      <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'modernize' ); ?>">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'social',
            'menu_class'     => 'sns-menu',
            'depth'          => 1,
            'link_before'    => '<svg viewBox="0 0 64 64" class="icon"><use xlink:href="">',
            'link_after'     => '</use></svg>',
          ) );
        ?>
      </nav><!-- .social-navigation -->
    <?php endif; ?>

    <div class="footer__info">
      <a href="<?php echo esc_url( __( 'https://www.douban.com/people/153720323', '153720323' ) ); ?>"><?php printf( esc_html__( 'Douban: %s', 'modernize' ), '柠檬茶' ); ?></a>
      <span class="sep"> | </span>
      <?php printf( esc_html__( 'Github: %s.', 'modernize' ),  '<a href="https://github.com/jiayuann" rel="designer">Jiayuann</a>' ); ?>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
