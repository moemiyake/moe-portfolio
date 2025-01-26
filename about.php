<?php 
/*
Template name: ABOUTページ
*/
?>

<?php get_header(); ?>

    <section class="about" id="about">
        <div class="moe-img">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about/pc_moePenguin.png" media="(min-width: 768px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/sp_moePenguin.png" alt="三宅萌の代わりのペンギン">
            </picture>
        </div>
        <div class="moe-introduction">
            <h5>
                <span>Moe Miyake</span>
                <br>三宅 萌
            </h5>
            <p>
                1994年生まれ。幼少期からものづくりが好きで、事務員として働きながら、曲を作ったり、建築模型を作ったり、ハンドメイドのあみぐるみなどを作る活動をしていました。<br>
                <br>
                以前からデザインを本格的に勉強したかったこと、Webサイトのデザイン設計の面白さ、タップすると画面上のものが動く仕組みに惹かれ、Webデザイナーを目指すことを決意。職業訓練校で6ヶ月間Webデザインについて学んできました。<br>
                「コツコツやれば大丈夫」という言葉をモットーに、コツコツと丁寧に制作し、ユーザー様に満足していただけるWebデザイナーを目指しています。<br>
                <br>
                特技は料理と、すぐに小さな子供と仲良くなること。
            </p>
        </div>
    </section>

    <section class="skill" id="skill">
        <h3>できること</h3>
        <div class="skill-cotainer">
            <div class="skill_design">
                <h4>WEBデザイン</h4>
                <p>Webサイト、バナーの制作をすることができます。ユーザーにとって使いやすいシンプルなデザインを心がけながら、少し特別な空気を感じて心地よくサイトを閲覧していただけるデザインになるように作り込むようにしています。
                </p>
            </div>
            <div class="skill_development">
                <h4>WEB開発</h4>
                <p>デザインカンプを忠実に再現することが出来ます。レスポンシブ対応も可能です。規則性のある命名を行い、誰が見ても分かりやすいコードを書くことを心がけています。JavaScript や jQuery
                    を利用して、ユーザーアクションによって動くしかけも、日々勉強しています。</p>
            </div>
        </div>
    </section>

    <!-- 上へもどる -->
    <p class="pagetop">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/to_top2.png" alt="Topへ戻る"></a>
    </p>

<?php get_footer(); ?>