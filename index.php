<?php get_header(); ?>

<section class="blog-section">
    <div class="page-container">

        <h2 class="section-title">Health Articles</h2>

        <div class="blog-container">

            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                <div class="blog-card">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p><?php the_excerpt(); ?></p>
                </div>

            <?php endwhile; endif; ?>

        </div>

    </div>
</section>

<?php get_footer(); ?>