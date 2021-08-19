<?php
/**
* Template Name: Contact Layout
*
* @package WordPress
*/

get_header(); ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Portfolio Details</li>
            </ol>
            <h2>Portfolio Details</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="map">
        <?php get_template_part( 'template-parts/sections/contact', 'map'); ?>
    </section>

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-12">
                <?php 
                if (have_posts()) {
                    while (have_posts()) {
                      the_post();
                      ?>

                          <h1>
                            <?php the_title(); ?>
                          </h1>

                          <div class="content_page">
                            <?php the_content(); ?>
                          </div>

                      <?php
                    }
                }
            ?>
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

<?php get_footer(); ?>