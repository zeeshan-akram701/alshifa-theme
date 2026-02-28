<?php get_header(); ?>

<main class="homepage">

    <section class="hero">
      <h1><?php echo get_theme_mod('hero_heading', 'Welcome to Al Shifa Clinic & Pharmacy'); ?></h1>

        <p><?php echo get_theme_mod('hero_tagline', 'Your health is our top priority'); ?></p>
        <a href="#" class="btn">Book Appointment</a>
    </section>
    
    <section class="about-clinic">

    <div class="about-container">

        <div class="about-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.png" alt="About Clinic">
        </div>

        <div class="about-text">
            <h2>About Al Shifa Clinic</h2>
            <p>
                Al Shifa Clinic & Pharmacy is dedicated to providing quality healthcare
                services with experienced doctors, modern equipment, and compassionate care.
                We prioritize patient well-being and ensure a comfortable environment for everyone.
            </p>

            <p>
                From general checkups to specialized treatments, our mission is to serve
                the community with trust, care, and professionalism.
            </p>
        </div>

    </div>

    </section>
    
    <section class="services-section">

    <h2 class="section-title">Our Medical Services</h2>

    <div class="services-container">

        <?php
        $services = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 4
        ));

        if($services->have_posts()) :
            while($services->have_posts()) : $services->the_post();
        ?>

<a href="<?php the_permalink(); ?>">
    <div class="service-card">
             <?php the_post_thumbnail(); ?>
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
        </div>
    </a>

        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>

    </div>

</section>


<section class="team-section">

    <h2 class="section-title">Our Specialist Doctors</h2>

    <div class="team-container">

        <div class="doctor-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/doctor1.jpg" alt="">
            <h3>Dr. Aleena</h3>
            <p>General Physician</p>
        </div>

        <div class="doctor-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/doctor2.jpg" alt="">
            <h3>Dr. Sara Khan</h3>
            <p>Child Specialist</p>
        </div>

        <div class="doctor-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/doctor3.jpg" alt="">
            <h3>Dr. Areeb</h3>
            <p>Cardiologist</p>
        </div>

    </div>

</section>


<section class="cta-section">

    <div class="cta-container">
       <h2><?php echo get_theme_mod('cta_text', 'Book Your Appointment Today'); ?></h2>
        <p>Experienced doctors, modern facilities, and compassionate care — all in one place.</p>
        <a href="#" class="cta-btn">Make an Appointment</a>
    </div>

</section>

</main>

<?php get_footer(); ?>
