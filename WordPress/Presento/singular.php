<?php get_header(); ?>

<main id="main">
    <?php get_template_part('template-parts/sections/link','breadcrumbs'); ?>

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <?php get_template_part('template-parts/content/post-entry','single') ?>                    
                    <?php get_template_part('template-parts/content/post','author') ?>
                    <?php get_template_part('template-parts/content/post','comments') ?>

                </div><!-- End blog entries list -->
                
                <?php get_sidebar(); ?>                

            </div>

        </div>
    </section><!-- End Blog Single Section -->

</main><!-- End #main -->

<?php get_footer(); ?>