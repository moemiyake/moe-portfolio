<?php get_header(); ?>
<!-- 解決策１　get_the contentで読み込む -->
<!-- 解決策２　ファイル名を固定ページpage_Worksに変える -->
    <main>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>

        <h6>Works</h6>
        <?php the_content(); ?>
         <!-- ★ コンテンツ（固定ページで作成）が表示されない？ -->
          <!-- index.phpでは、the_contentの意味が変わってくるので表示されない -->
        <?php endwhile; ?>
    <?php endif; ?>

        <p class="pagetop">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/to_top2.png" alt="Topへ戻る"></a>
        </p>
    </main>



<?php get_footer(); ?>
