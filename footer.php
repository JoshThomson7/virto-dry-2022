    <footer role="contentinfo">
            
        <div class="footer__menus">
            <div class="max__width">

                <?php
                    while(have_rows('footer_menus', 'options')) : the_row();

                        $footer_menu = get_sub_field('footer_menu');
                        ?>
                        <article class="footer__menu">
                            <h5><?php echo $footer_menu->name; ?> <span class="ion-ios-plus-empty"></span></h5>

                            <?php wp_nav_menu(array('menu' => $footer_menu->name, 'container' => false, 'walker' => new clean_walker)); ?>
                        </article>

                <?php endwhile; ?>

                <article class="footer__menu social">
                   <h5>Follow Us <span class="ion-ios-plus-empty"></span></h5>
                    <?php if(get_field('header_social', 'options')): ?>
                        <ul class="social-wrapper">
                            <?php while(have_rows('header_social', 'options')) : the_row(); ?>
                                <li>
                                    <a href="<?php the_sub_field('header_social_url'); ?>" title="<?php the_sub_field('header_social_platform'); ?>" target="_blank">
                                        <i class="<?php the_sub_field('header_social_icon'); ?>"></i>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul><!-- header__social -->

                    <?php endif; ?>

                </article>

                <article class="footer__menu find-us">
                    <h5>Find Us</h5>

                    <div class="contact">
                        <a href="https://www.google.com/maps/place/Fraser+Optical/@57.4830951,-4.4629993,17z/data=!3m1!4b1!4m5!3m4!1s0x488f0bf2d9a6a16d:0x5d6591b623e58d5c!8m2!3d57.4830939!4d-4.460813" target="_blank">,<br>
                        ,<br>
                        ,<br>
                        </a>
                    </div>
                </article>

            </div><!-- max__width -->

        </div><!-- footer__menus -->

        <div class="subfooter">
            <div class="subfooter__credits">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/virto-dry-sized.png" alt="<?php bloginfo('name'); ?>">
                <p>&copy;<?php bloginfo('name') ?> <?php echo date("Y"); ?></p>
                <p class="credit"><a href="https://thomson-website-solutions.com/" target="_blank">Website by Thomson Website Solutions</a></p>
            </div><!-- subfooter__credits -->
        </div><!-- subfooter -->
            
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
