<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">
        <?php 

            if (function_exists('custom_breadcrumbs')) {
                custom_breadcrumbs();
            }

        ?>

        <h2>
        <?php 
            if (is_single()){
                echo get_the_title( get_the_ID());
            }


            add_filter( 'get_the_archive_title', function ($title) {
                if ( is_category() ) {
                $title = single_cat_title( '', false );
                } elseif ( is_tag() ) {
                $title = single_tag_title( '', false );
                } elseif ( is_author() ) {
                $title = '<span class="vcard">' . get_the_author() . '</span>' ;
                }
                
                return $title;
            });

            if (is_archive()) {                
                echo get_the_archive_title('');
            }
        ?>
        </h2>

    </div>
</section><!-- End Breadcrumbs -->