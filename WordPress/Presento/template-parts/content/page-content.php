<div class="col-lg-8">
    <div class="portfolio-details-slider swiper-container">
        <div class="swiper-wrapper align-items-center">
            <article class="entry entry-single">

                <?php 

            if ( have_posts() ) {

                while ( have_posts() ) {
                    the_post();
                    // Bắt đầu viết các trường dữ liệu
                ?>

                <h2 class="entry-title"><?php the_title(); ?></h2>
                <div class="thumbnails"><?php the_post_thumbnail(); ?></div>
                <p><a href="<?php the_permalink(); ?>">Xem thêm</a></p>
                <div class="entry-content"><?php the_content(); ?></div>


                <?php    

                }
            }            
            ?>
            </article>
            <?php get_template_part( 'template-parts/content/page', 'slider'); ?>


        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>