<?php get_header(); ?>

    <main>
        <?php the_content(); ?>

        <p class="pagetop">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/to_top2.png" alt="Topへ戻る"></a>
        </p>
    </main>

<?php get_footer(); ?>