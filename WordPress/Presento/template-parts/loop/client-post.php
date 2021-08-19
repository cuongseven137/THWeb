<?php 
    // Custom WP query query_clients
    $args_query_clients = array(
        'post_type' => array('client_post'),
        'nopaging' => true,
        'order' => 'DESC',
    );

    $query_clients = new WP_Query( $args_query_clients );

    if ( $query_clients->have_posts() ) {
        while ( $query_clients->have_posts() ) {
            $query_clients->the_post();
            ?>

                <div class="swiper-slide"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt=""></div>

            <?php
        }
    } else {

    }

    wp_reset_postdata();
?>


