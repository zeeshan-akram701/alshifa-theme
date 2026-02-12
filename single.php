<?php get_header(); ?>

<section class="single-post">
    <div class="single-container">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <?php the_post_thumbnail(); ?>

            <div class="post-content">
                <?php the_content(); ?>
            </div>

        <?php endwhile; endif; ?>

    </div>
</section>

<?php get_footer(); ?>