<?php get_header(); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Bettter digital experience with Presento</h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <?php get_template_part( 'template-parts/sections/home', 'clients' ) ?>

    <?php get_template_part( 'template-parts/sections/home', 'about' ) ?>
    
    <?php get_template_part( 'template-parts/sections/home', 'count' ) ?>
    
    <?php get_template_part( 'template-parts/sections/home', 'tabs' ) ?>
    
    <?php get_template_part( 'template-parts/sections/home', 'services' ) ?>
    
    <?php get_template_part( 'template-parts/sections/home', 'portfolio' ) ?>

    <?php get_template_part( 'template-parts/sections/home', 'testimonials' ) ?>

    <?php get_template_part( 'template-parts/sections/home', 'price' ) ?>
    
    <?php get_template_part( 'template-parts/sections/home', 'faqs' ) ?>
    
    <?php get_template_part( 'template-parts/sections/home', 'team' ) ?>    

    <?php get_template_part( 'template-parts/sections/home', 'contact' ) ?>
    

  </main><!-- End #main -->

  <?php get_footer(); ?>