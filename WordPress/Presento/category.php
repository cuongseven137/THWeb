<?php get_header(); ?>

  <main id="main">

    <?php get_template_part('template-parts/sections/link','breadcrumbs'); ?>

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <h3>Trang chuyên mục - Category</h3>
      <div class="container" data-aos="fade-up">

        <div class="row">

          <?php get_template_part( 'template-parts/content/category', 'content'); ?>

          <?php get_sidebar(); ?>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

<?php get_footer(); ?>