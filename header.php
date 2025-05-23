<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=Noto+Serif+JP:wght@200..900&family=Zen+Kaku+Gothic+New:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">

    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>


    <!-- ヘッダー -->
    <header>

        <!-- モバイル -->
        <button class="sp-header-navbtn sp-only" type="btn">
            <span></span>
        </button>
        
        <nav class="sp-header-nav sp-only">
        <?php 
            $args = [
                'menu' => 'global-navigation',
                'menu_class' => 'gnav-list sp-humburger',
                'add_li_class' => 'hamburger',
                'container' => false,
            ];
            wp_nav_menu($args);
            ?>
            <!-- <ul class="gnav-list sp-humburger">
                <li class="gnav-item hamburger"><a href="<?php echo home_url(); ?>">Top</a></li>
                <li class="gnav-item hamburger"><a href="#works">Works</a></li>
                <li class="gnav-item hamburger"><a href="about.html">About</a></li>
            </ul> -->
        </nav>


        <!-- PC -->
        <nav class="pc-header-nav pc-only">
            <!-- <ul class="gnav-list">
                <li class="gnav-item"><a href="<?php echo home_url(); ?>">Top</a></li>
                <li class="gnav-item"><a href="#works">Works</a></li>
                <li class="gnav-item"><a href="about.html">About</a></li>
            </ul> -->
             <!-- 横並びにならない / 解決策　一回検証でどんなコードが表示されているか見るulの中にulが入っている可能性大 -->
              <!-- 解決！ -->
            <?php 
            $args = [
                'menu' => 'global-navigation',
                'menu_class' => 'gnav-list',
                'container' => false,
            ];
            wp_nav_menu($args);
            ?>
        </nav>


    </header>