<?php 
if ( have_posts() ) {

    while ( have_posts() ) {
        the_post();
        // Bắt đầu viết các trường dữ liệu
    ?>

<article class="entry" id="post-<?php the_ID(); ?>">

    <div class="entry-img">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
    </div>

    <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>

    <div class="entry-meta">
        <ul>
            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"><?php the_author(); ?></a></li>
            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time
                        datetime="2020-01-01"><?php the_date(); ?></time></a></li>
            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12
                    Comments</a></li>
        </ul>
    </div>

    <div class="entry-content">
        <p>
            <?php the_excerpt(); ?>
        </p>
        <div class="read-more">
            <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
    </div>

</article><!-- End blog entry -->


<?php  } } ?>