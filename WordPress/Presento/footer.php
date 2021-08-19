<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">

    <?php $presento_footer = array( 
            'menu' => 'WebMenu', 
            'container' => 'nav', 
            'container_class' => 'menu-menu1-container', 
            'container_id' => '', 
            'menu_class' => 'navbar order-last order-lg-0', 
            'menu_id' => 'navbar',
            'echo' => true, 
            'fallback_cb' => 'wp_page_menu', 
            'before' => '', 
            'after' => '', 
            'link_before' => '', 
            'link_after' => '', 
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
            'item_spacing' => 'preserve', 
            'depth' => 0, 
            'walker' => '', 
            'theme_location' => 'FooterMenu' 
    ); ?>
    
    <?php //wp_nav_menu( $presento_footer ); ?>


        <div class="container">
            <div class="row">

                <?php get_template_part( 'template-parts/footer/footer', 'information') ?>
                <?php get_template_part( 'template-parts/footer/useful', 'links') ?>
                <?php get_template_part( 'template-parts/footer/our', 'services') ?>
                <?php get_template_part( 'template-parts/footer/our', 'newsletter') ?>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <?php get_template_part( 'template-parts/footer/site', 'copyright') ?>
        <?php get_template_part( 'template-parts/footer/social', 'links') ?>
        
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<?php wp_footer(); ?>
</body>

</html>