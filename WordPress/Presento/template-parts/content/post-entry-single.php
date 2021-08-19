<?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
                ?>

<article class="entry entry-single post-<?php echo get_the_ID();?>">

    <!-- <div class="entry-img">
        <img src="<?php //echo get_template_directory_uri(); ?>/assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
    </div> -->

    <?php the_post_thumbnail(); ?>

    <h2 class="entry-title">
        <a href="blog-single.html"><?php the_title(); ?></a>
    </h2>

    <!-- <div class="entry-meta">
        <ul>
            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a>
            </li>
            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time
                        datetime="2020-01-01">Jan 1, 2020</time></a></li>
            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12
                    Comments</a></li>
        </ul>
    </div> -->

    <div class="entry-content">       
       <?php the_content(); ?>
    </div>

    <div class="entry-footer">
        <i class="bi bi-folder"></i>
        <ul class="cats">            
            <li><a href="#">
            <?php 

            // danh sách đầy đủ Array chuyên mục     
            $category = get_the_category(); 
            echo $category[0]->cat_name;    // hiển thị tên chuyên mục thứ nhất

            ?>
            
            </a></li>
        </ul>

        <i class="bi bi-tags"></i>

        <?php
            echo get_the_tag_list(
                '<ul class="tags"><li><a href="#">',
                '</a></li><li>',
                '</li></ul>', 
                get_queried_object_id()
            );
        ?>  
    </div>

</article><!-- End blog entry -->

<?php
        } // end while
        } // end if
    ?>