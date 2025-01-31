<?php get_header(); ?>

    <main>

        <!-- TOP MV -->
        <section class="mv" id="mv">
            <h1 class="mv-title">MOE MIYAKE</h1>

            <div class="mv-img">
                <div class="mv-img_bg">
                    <picture class="mv-img_bg_acacia">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/pc_bg.jpg" media="(min-width: 768px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_bg.jpg" alt="Vessiのロゴ">
                    </picture>
                </div>
                <div class="mv-img_fg">
                    <picture class="mv-img_fg_opening">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/pc_opening.png" media="(min-width: 768px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_opening.png" alt="冒頭挨拶：ものを作ることで、人の役に立ち、人の笑顔につながっていく。そんなお手伝いが出来ればと考えています。">
                    </picture>
                    <picture class="mv-img_fg_roof">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/pc_roof.png" media="(min-width: 768px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_roof.png" alt="家の屋根の背景画像">
                    </picture>
                </div>
            </div>
        </section>


        <!-- WORKS -->
        <section class="works" id="works">
            <h2 class="works-title">Works</h2>
            <ul class="works_container">
                <li class="works_item">
                    <a href="<?php echo home_url('/works-web-vessi/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/Portofolio_photo_Vessi.jpg" alt="WEBサイト：Vessi">
                    </a>
                </li>

                <li class="works_item">
                    <a href="<?php echo home_url('/works-web-secret_amusement_park/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/Portofolio_photo_ひみつの遊園地.jpg" alt="WEBサイト：ひみつの遊園地">
                    </a>
                </li>

                <li class="works_item">
                    <a href="<?php echo home_url('/works-web-portfolio/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/Portofolio_photo_Portoforio.jpg" alt="WEBサイト：ポートフォリオ">
                    </a>
                </li>

                <li class="works_item">
                    <a href="<?php echo home_url('/works-banner-park/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/Portofolio_photo_banner_park.jpg" alt="バナー：四季の森公園の秋">
                    </a>
                </li>

                <li class="works_item">
                    <a href="<?php echo home_url('/works-banner-park_festival/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/Portofolio_photo_banner_autumn leaves festival.jpg" alt="バナー：四季の森公園の秋祭り">
                    </a>
                </li>

                <li class="works_item">
                    <a href="<?php echo home_url('/works-banner-snow_cream/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/Portofolio_photo_banner_icecream.jpg" alt="バナー：アイスクリームショップの新作の告知">
                    </a>
                </li>

                <li class="works_item">
                    <a href="<?php echo home_url('/works-web-toricolate/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/Portofolio_photo_Toricolate.jpg" alt="WEBサイト：トリコレート">
                    </a>
                </li>

                <li class="works_item">
                    <a href="<?php echo home_url('/works-logo-secret_amusement_park/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/Portofolio_photo_Logo.jpg" alt="ロゴ：ひみつの遊園地">
                    </a>
                </li>

                <li class="works_item">
                    <a href="<?php echo home_url('/works-icon-simple_icons/'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/photo/Portofolio_photo_icon.jpg" alt="アイコン：ECサイト">
                    </a>
                </li>

            </ul>

        </section>

        
        <!-- 上へもどる -->
        <p class="pagetop">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/to_top2.png" alt="Topへ戻る"></a>
        </p>
    </main>


    <?php get_footer(); ?>