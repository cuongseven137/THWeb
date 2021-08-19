<?php 

// Custom WP query query_portfolio
$args_query_portfolio = array(
	'post_type' => array('portfolio'),
	'nopaging' => true,
	'order' => 'DESC',
);

$query_portfolio = new WP_Query( $args_query_portfolio );

if ( $query_portfolio->have_posts() ) {
	while ( $query_portfolio->have_posts() ) {
		$query_portfolio->the_post();
        
        global $post;
        $terms = wp_get_post_terms( $post->ID, 'branch');
        $first_term = $terms[0]->name;        

?>

<div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $first_term; ?>">
    <div class="portfolio-wrap">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid"
            alt="">
        <div class="portfolio-info">
            <h4><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
            <div class="portfolio-links">
                <a href="<?php echo get_the_post_thumbnail_url(); ?>"
                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php the_title(); ?>"><i
                        class="bx bx-plus"></i></a>
                <a href="<?php the_permalink(); ?>" title="More Details"><i class="bx bx-link"></i></a>
            </div>
        </div>
    </div>
</div>


<?php 

}
} else {

}

wp_reset_postdata();

?>