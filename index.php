<?php get_header(); ?>

    <main>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>

        <h6>Works</h6>
        <?php the_content(); ?>

        <?php endwhile; ?>
    <?php endif; ?>

        <p class="pagetop">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/to_top2.png" alt="Topへ戻る"></a>
        </p>
    </main>



<?php get_footer(); ?>
