<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Strapped
 */

?>

            </div><!-- /#content .site-cont -->

        </div><!-- /.container .flex-box -->

        <div class="row footer-box">

            <footer id="colophon" class="site-footer" role="contentinfo">
                <div id="site-navigation-footer">
                <?php wp_nav_menu([
                   'theme_location' => 'footer',
                   'container_class' => 'dropup',
                   'menu_id' => 'footer-menu',
                   'menu_class' => 'nav navbar-nav',
                   'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                   'walker' => new wp_bootstrap_navwalker(),
                ]); ?>
                </div>
            </footer>

        </div>

    </div><!-- /#page .site -->

</div><!-- #primary .content-area -->
<?php wp_footer(); ?>
</body>
</html>




